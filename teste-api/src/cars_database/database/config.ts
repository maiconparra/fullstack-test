export interface Config {
    dialect: 'mariadb',
    host: 'localhost',
    port: 3306,
    database: 'magicpark',
    username: 'root',
    password: 'root',
    define: {
        timestamps: true,
        underscored: false
    }
}

