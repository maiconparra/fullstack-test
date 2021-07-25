'use strict';

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable('cars', {
      id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        allowNull: false,
        primaryKey: true
      },
      veiculo: {
        type: Sequelize.STRING,
        allowNull: false
      },
      marca: {
        type: Sequelize.STRING,
        allowNull: false
      },
      ano: {
        type: Sequelize.INTEGER,
        allowNull: false
      },
      descricao: {
        type: Sequelize.STRING,
        allowNull: false
      },
      vendido: {
        type: Sequelize.BOOLEAN,
        allowNull: true 
      },
      file: {
        type: Sequelize.STRING,
        allowNull: false
      },
      createdAt: {
        type: Sequelize.DATE,
        allowNull: false
      },
      updatedAt: {
        type: Sequelize.DATE,
        allowNull: true
      }
    })
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable('cars');
  }
};
