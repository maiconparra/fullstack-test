import CarModel from '../../cars_business/models/cars.model';
import { DataTypes } from 'sequelize';

export class Car extends CarModel {

    static onLoadCar(sequelize: any): void{
        super.init({
            veiculo: DataTypes.STRING,
            marca: DataTypes.STRING,
            ano: DataTypes.INTEGER,
            descricao: DataTypes.DATE,
            vendido: DataTypes.TINYINT,
        },{
            sequelize,
            freezeTableName: true
        });
    }

}