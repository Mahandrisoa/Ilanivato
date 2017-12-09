import React, {Component} from 'react';
import ReactDOM from 'react-dom';

export default class NewsComponent extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="box">
                <div className="box-header b-b">
                    <h3>Vaovao samihafan'ny Sampana, Sampan'Asa ary Fikambanana</h3>
                </div>
                <div className="box-body">
                    <div className="row row-sm">
                        <div className="col-xs-4">
                            <a href>
                                <img src="images/c6.jpg" className="w-full"></img>
                            </a>
                        </div>
                        <div className="col-xs-4">
                            <a href>
                                <img src="images/c4.jpg" className="w-full"></img>
                            </a>
                        </div>
                        <div className="col-xs-4">
                            <a href>
                                <img src="images/c5.jpg" className="w-full"></img>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
