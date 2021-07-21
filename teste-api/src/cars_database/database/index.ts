import { Sequelize } from 'sequelize';
import { Config } from './config';


// Mappings
import { Car } from '../mappings/cars.mapping';

const connection = new Sequelize('mysql://maicon:123456@localhost:3306/cars');

Car.onLoadCar(connection);

export default connection;
