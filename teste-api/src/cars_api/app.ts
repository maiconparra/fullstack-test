import express from 'express';
import cors from 'cors';

import connection from '../cars_database/database';

import Routes from './routes/router';


class App {
    public express: express.Application

    public constructor (
    ) {
      this.express = express();
      this.connect();
      this.middleware();
      this.routes();
    }

    private middleware(): void {
        this.express.use(express.json());
        this.express.use(cors());
    }

    private connect(): void {
        connection
    }

    private routes(): void {
      this.express.use(Routes);
    }
}

export default new App().express;
