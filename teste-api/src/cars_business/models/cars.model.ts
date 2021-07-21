import { CarInterface } from '../interfaces/car.interface';

import { Model, Optional} from 'sequelize';

interface CarCreation extends Optional<CarInterface, "id"> {}

class CarModel extends Model<CarInterface, CarCreation> implements CarInterface {

    public id?: Number;
    public veiculo: String;
    public marca: String
    public ano: Number
    public descricao: String;
    public vendido: Boolean;
}

export default CarModel;