import React, {Component} from 'react';

import {Modal, Button} from 'react-bootstrap';
import {observer} from 'mobx-react';

export default class CreationDate extends Component {

    constructor(props) {
        super(props);
        this.state = {
            show: false,
        };
    }

    showModal() {
        this.setState({show: true});
    }

    hideModal() {
        this.setState({show: false});
    }

    handleSubmit(e) {
        console.log('Submit');
    }

    render() {
        let _button = null;
        let _date_creation = this.props.date_creation;
        console.log(_date_creation);
        if (_date_creation === null) {
            _button =
                <button className="pull-right btn btn-warning btn-xs" onClick={this.hideModal.bind(this)}>+</button>;
        } else {
            _button = <button className="pull-right btn btn-xs white btn-icon">
                <i className="fa fa-pencil text-muted m-r-sm" onClick={this.showModal.bind(this)}></i>
            </button>;
        }
        return (
            <div>
                <h6>Taona niforonana : <span className="text">{_date_creation}</span>
                    {_button}
                </h6>
                <Modal {...this.props} show={this.state.show}
                                       show={this.state.show}
                                       onHide={this.hideModal.bind(this)}
                                       dialogClassName="custom-modal"
                                       bsSize="small" aria-labelledby="contained-modal-title-lg"
                >
                    <Modal.Header closeButton>
                        <Modal.Title id="contained-modal-title-lg">Ajouter une date</Modal.Title>
                    </Modal.Header>
                    <form onSubmit={ (e) => { e.preventDefault(); this.handleSubmit.bind(this) }}>
                        <Modal.Body>
                            <div className="form-group row">
                                <label htmlFor="textarea" className="col-sm-2 form-control-label">Date</label>
                                <div className="col-sm-10">
                                    <input type="date" ref={input => this._date = input} className="form-control"
                                           required/>
                                </div>
                            </div>
                        </Modal.Body>
                        <Modal.Footer>
                            <Button bsStyle="warning" bsSize="sm" type="submit">Ajouter</Button>
                            <Button onClick={this.hideModal.bind(this)} bsSize="sm">Fermer</Button>
                        </Modal.Footer>
                    </form>
                </Modal>
            </div>
        )
    }
}
