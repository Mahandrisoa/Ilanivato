import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Button} from 'react-bootstrap';
import axios from 'axios';

import Event from './Event';
import CreationDate from './CreationDate';

import {observer} from 'mobx-react';

const Header = <div className="box-header b-b"><h3>NY TANTARAN'NY SAMPANA</h3></div>;

export default class Master extends Component {

    constructor(props){
        super(props);
        this.state = {
            data : { 'date_creation' : ''}
        }
    }

    componentDidMount(){
    }

    render() {
        return (
            <div>
                {Header}
                <div className="box-body">
                    <CreationDate date_creation='2018-02-03'/>
                    <div className="dropdown-divider"></div>
                    <Event />
                </div>
            </div>
        );
    }
}

if (document.getElementById('historique_box')) {
    ReactDOM.render(<Master/>, document.getElementById('historique_box'));
}
