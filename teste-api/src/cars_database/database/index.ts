import { Sequelize } from 'sequelize';
import { Config } from './config';


// Mappings
import { cars } from '../mappings/cars.mapping';

const connection = new Sequelize('mysql://root:@localhost:3306/cars');

cars.onLoadCar(connection);

export default connection;
