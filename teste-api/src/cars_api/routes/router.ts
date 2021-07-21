import { Router } from 'express';

import CarsConttroler from '../controllers/cars.controller';

const Routes = Router();

const carsConttroler = new CarsConttroler;


//ObjetoMagico
Routes.get('/carById/:id', carsConttroler.carById);
Routes.put('/carUpdate/:id/:veiculo/:marca/:ano/:descricao/:vendido', carsConttroler.carUpdate);
Routes.delete('/carDelete/:id', carsConttroler.carDelete);
Routes.get('/carsFind/:veiculo/:marca', carsConttroler.carsFind);
Routes.post('');


export default Routes;