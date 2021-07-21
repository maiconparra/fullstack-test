import { Router } from 'express';

import CarsConttroler from '../controllers/cars.controller';

const Routes = Router();

const carsConttroler = new CarsConttroler;


//ObjetoMagico
Routes.get('/carById', carsConttroler.carById);
Routes.put('/carUpdate', carsConttroler.carUpdate);
Routes.delete('/carDelete', carsConttroler.carDelete);
Routes.get('/carsFind', carsConttroler.carsFind);
Routes.post('/carsPost', carsConttroler.carPost);


export default Routes;