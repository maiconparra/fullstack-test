import { Request, Response } from 'express';
import { Json } from 'sequelize/types/lib/utils';
import { cars } from '../../cars_database/mappings/cars.mapping';


export default class CarsController {

    constructor(){}

    public async carById(req: Request, res: Response): Promise<Response> {

        const { id } = req.body;

        cars.findByPk(id).then(result => {
            res.json(result);
        }).catch(error => {
            res.json(error);
        });

        return;
    }

    public async carUpdate(req: Request, res: Response): Promise<Response> {
        
        const { id, veiculo, marca, ano, descricao, vendido } = req.body;

        let venda: Boolean;

        if (vendido === "1") {
            venda = true;
        }else {
            venda = false;
        }

        cars.update({
            veiculo,
            marca,
            ano: parseInt(ano),
            descricao,
            vendido: venda
        }, {
            where: {
                id
            }
        }).then(result => {
            return res.json(result);
        }).catch(error => {
            return res.json(error);
        });

        return;

    }

    public async carPost(req: Request, res: Response): Promise<Response> {

        const carro = req.body;

        let vend; 

        if(carro.vendido === 'true') {
            vend = true;
        }else {
            vend = false;
        }

        cars.create({
            veiculo: carro.veiculo,
            marca: carro.marca,
            ano: parseInt(carro.ano),
            descricao: carro.descricao,
            vendido: vend
        }).then(result => {
            return res.json(result);
        }).catch(error => {
            return res.json(error);
        });

        return;
    }

    public async carDelete(req: Request, res: Response): Promise<Response> {

        const { id } = req.body;

        cars.findByPk(id).then(result => {

            result.destroy();

            return res.json(result);
        }).catch(error => {
            return res.json(error);
        });

        return;
    }

    public async carsFind(req: Request, res: Response): Promise<Response> {

        const { veiculo, marca } = req.body;

        
        if (veiculo !== '' && marca === '') {
            cars.findAll({where : {
                veiculo
            }}).then(result => {
                return res.json(result);
            }).catch(error => {
                return res.json(error);
            });
        }else if (veiculo === '' && marca !== '') {
            cars.findAll({where : {
                marca
            }}).then(result => {
                return res.json(result);
            }).catch(error => {
                return res.json(error);
            });
        }else if (veiculo !== '' && marca !== ''){
            cars.findAll({where : {
                marca,
                veiculo
            }}).then(result => {
                return res.json(result);
            }).catch(error => {
                return res.json(error);
            });
        }else {
            cars.findAll().then(result => {
                return res.json(result);
            }).catch(error => {
                return res.json(error);
            });
        }

        return;
    }
   
}