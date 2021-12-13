import React from 'react';
import ReactDOM from 'react-dom';
import '../../sass/app.scss';
import {
    BrowserRouter,
    Link
} from "react-router-dom";
import Header from './header/Header';

function App() {
    return (
        <BrowserRouter>
            <div className="app">
               <Header />
                
            </div>
        </BrowserRouter>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
