import './styles/app.css';
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
import React from 'react'; 
import ReactDOM from 'react-dom/client';
import { Home } from './src/Home';

const root = ReactDOM.createRoot(document.getElementById('root'));

root.render(
    <React.StrictMode>
        <Home />
    </React.StrictMode>
)
