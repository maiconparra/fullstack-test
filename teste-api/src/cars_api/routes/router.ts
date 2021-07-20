import { Router } from 'express';

import CarsConttroler from '../controllers/cars.controller';

const Routes = Router();

const carsConttroler = new CarsConttroler;


//ObjetoMagico
Routes.get('/coletar/:ObjetoMagicoIDFK/:ItensIDFK', carsConttroler.carById);


export default Routes;