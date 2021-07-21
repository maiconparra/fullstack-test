import { Request, Response } from 'express';
import { Json } from 'sequelize/types/lib/utils';
import { Car } from '../../cars_database/mappings/cars.mapping';


export default class CarsController {

    constructor(){}

    public async carById(req: Request, res: Response): Promise<Response> {

        const { id } = req.params;

        const car = Car.findByPk(id);

        return res.json(car);
    }

    public async carUpdate(req: Request, res: Response): Promise<Response> {
        
        const { id, veiculo, marca, ano, descricao, vendido } = req.params

        let venda: Boolean;

        if (vendido === "true") {
            venda = true;
        }else {
            venda = false;
        }

        const car = Car.update({
            veiculo,
            marca,
            ano: parseInt(ano),
            descricao,
            vendido: venda
        }, {
            where: {
                id
            }
        });

        return res.json(car);

    }

    public async carDelete(req: Request, res: Response): Promise<Response> {

        

        return  res.json();
    }

    public async carsFind(req: Request, res: Response): Promise<Response> {

        const { veiculo, marca } = req.params;

        let result: any;

        if ((veiculo === null || veiculo === '') || (marca === null || marca === '')) {
            result = {
                error: "Não foi digitado nenhum valor parra a busca"
            };
        }else if (veiculo !== '' && marca === '') {
            result = Car.findAll({where : {
                veiculo
            }});
        }else if (veiculo === '' && marca !== '') {
            result = Car.findAll({where : {
                marca
            }});
        }else {
            result = Car.findAll({where : {
                marca,
                veiculo
            }});
        }

        return res.json(result);
    }
   
}