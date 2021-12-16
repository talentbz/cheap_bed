import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";

import store from '../store';
import PrivateRoute from './PrivateRoute';
import AuthRoute from './AuthRoute';
import Homepage from './Homepage/Homepage';
function App() {
    return (
        <Provider store={store}>
            <Router>
                <Switch>
                    <PrivateRoute exact path="/" component={Homepage}></PrivateRoute>
                </Switch>
            </Router>
        </Provider>
    );
}

export default App;
if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}