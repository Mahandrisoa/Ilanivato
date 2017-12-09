import React, {Component} from 'react';

export default class FormComponent extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="box" id="postComponent">
                <form id="postForm">
                    <textarea className="form-control no-border" rows="3" placeholder="Vaovaon'ny Sampana (à publier) ..."></textarea>
                </form>
                <div className="box-footer clearfix">
                    <button className="btn pull-right btn-sm amber-500 warning">Publier</button>
                    <ul className="nav nav-pills nav-sm">
                        <li className="nav-item"><a className="nav-link" href><i className="fa fa-book text-muted"></i></a></li>
                        <li className="nav-item"><a className="nav-link" href><i className="fa fa-camera text-muted"></i></a></li>
                        <li className="nav-item"><a className="nav-link" href><i className="fa fa-video-camera text-muted"></i></a></li>
                    </ul>
                </div>
            </div>
        );
    }
}