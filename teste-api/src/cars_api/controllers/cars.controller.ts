import { Request, Response } from 'express';
import { Car } from '../../cars_database/mappings/cars.mapping';


export default class CarsController {

    constructor(){}

    public async carById(req: Request, res: Response): Promise<Response> {

        const { id } = req.params;

        const car = Car.findByPk(id);

        return res.json(car);
    }
   
}