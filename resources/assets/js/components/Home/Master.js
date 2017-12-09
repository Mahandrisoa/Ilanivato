import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {Button} from 'react-bootstrap';
import axios from 'axios';
import FormComponent from './FormComponent';
import NewsComponent from './NewsComponent';
import PostComponent from './PostComponent';

export default class Master extends Component {
    constructor(props) {
        super(props);
        this.state = {
            'posts' : {}
        };
    }

    componentDidMount() {
        const url = '/home/posts';
        axios.get(url)
            .then(response => {
                this.setState({ 'posts' : response.data });
            })
            .catch((error) => {
                console.warn(error);
            });
    }

    render() {
        return (
            <div>
                <NewsComponent />
                <FormComponent />
            </div>
        );
    }
}

if (document.getElementById('homeComponent')) {
    ReactDOM.render(<Master/>, document.getElementById('homeComponent'));
}
