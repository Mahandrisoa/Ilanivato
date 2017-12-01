import React, {Component} from 'react';

import axios from 'axios';

export default class EventRow extends Component {

    constructor(props) {
        super(props);
        this.state = {
            'edit_mod': false,
            'evenement': this.props.event.evenement
        }
        this.text = '';
    }

    enableEdit(e) {
        let editMod = this.state.edit_mod ? false : true;

        if (editMod == false && this.text.length > 0) {
            let playload = {'evenement': this.text};
            const url = laroute.route('histories.update', {history: this.props.event.id});
            axios.put(url, playload)
                .then((response) => {
                    this.setState({evenement: response.data.evenement});
                })
                .catch((error) => {
                    this.rollack();
                });
        }
        this.setState({
            'edit_mod': editMod
        });
    }

    componentDidUpdate() {
        if (this.state.edit_mod) {
            this.eventInput.focus();
        }
    }

    rollack() {
        const temp = this.props.event.evenement;
        this.eventInput.innerText = temp;
    }

    handleChange(e) {
        let _content = e.target.innerHTML;
        this.text = _content;
        console.log('This text : ', this.text);
    }

    handleDelete(event) {
        const url = laroute.route('histories.destroy', {history: this.props.event.id});
        axios.delete(url)
            .then((response) => {
                this.props.clickHandler();
            })
            .catch((error) => {
                alert(error);
            });
    }

    render() {
        return (
            <div className="streamline b-l m-b m-l">
                <div className="sl-item">
                    <div className="sl-right">
                        {this.state.edit_mod ?
                            (
                                <button className="pull-right btn btn-xs white btn-icon success"
                                        onClick={this.enableEdit.bind(this)}>
                                    <i className="fa fa-check text-muted m-r-sm"></i>
                                </button>
                            ) : (
                            <div className="pull-right">
                                <ul className="nav">
                                    <li className="nav-item inline dropdown">
                                        <a className="nav-link text-muted" data-toggle="dropdown">
                                            <i className="material-icons md-18">&#xe5d4;</i>
                                        </a>
                                        <div className="dropdown-menu dropdown-menu-scale pull-right">
                                            <a className="dropdown-item"
                                               onClick={this.enableEdit.bind(this)}>Modifier</a>
                                            <a className="dropdown-item" onClick={this.handleDelete.bind(this) }>Supprimer</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        )
                        }
                    </div>
                    <div className="sl-content">
                        <div className="sl-author">
                            <b>{this.props.event.date} : </b>
                        </div>
                        <div
                            ref={ (input) => { this.eventInput = input; } }
                            contentEditable={ this.state.edit_mod ? true : false }
                            dangerouslySetInnerHTML={{__html: this.state.evenement}}
                            onInput={this.handleChange.bind(this)}>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

