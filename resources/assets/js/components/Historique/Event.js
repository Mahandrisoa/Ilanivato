import React, {Component} from 'react';
import EventRow from './EventRow';
import {Modal, Button} from 'react-bootstrap';

import axios from 'axios';
import {observer} from 'mobx-react';

const imgContainer = {
    display: 'flex',
    display: '-webkit-box',
    display: '-moz-box',
    display: '-ms-flexbox',
    display: '-webkit-flex',
    alignItems: 'center',
    justifyContent: 'center'
};

export default class Event extends Component {

    constructor(props) {
        super(props);
        this.state = {
            show: false,
            evenements: []
        };
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    componentDidMount() {
        const url = laroute.route('histories.index');
        axios.get(url)
            .then(response => {
                this.setState({evenements: response.data});
                this.sortEvents();
            })
            .catch((error) => {
                console.warn('ERROR :', error);
            })
    }

    showModal() {
        this.setState({show: true});
    }

    hideModal() {
        this.setState({show: false});
    }

    handleSubmit(event) {
        const url = laroute.route('histories.store');
        let playload = {
            date: this._date.value,
            evenement: this._evenement.value
        }
        if (playload.date === '' || playload.evenement === '')
            return;
        axios.post(url, playload)
            .then(response => {
                this.state.evenements.unshift(response.data);
                this.setState({show: false});
                this.sortEvents();
            })
            .catch(error => {
                console.warn(error);
            });
    }

    sortEvents() {
        let sorted = this.state.evenements.sort((a, b) => {
            return new Date(a.date) - new Date(b.date);
        });
        this.setState({
            'evenements': sorted
        });
    }

    removeRow(key) {
        var newData = this.state.evenements.slice(); //copy array
        newData = newData.filter( ev => ev.id !== key); //remove element
        this.setState({evenements: newData}); //update state
    }

    render() {
        const rows = [];
        this.state.evenements.forEach((ev) => {
            rows.push(<EventRow event={ev} key={ev.id} clickHandler={ () => {this.removeRow(ev.id)} }/>);
        });

        return (
            <div>
                <h6> Zava - nisy
                    <button className="pull-right btn btn-warning btn-xs" onClick={this.showModal.bind(this)}>+
                    </button>
                </h6>
                {this.state.evenements.length == 0 ?
                    (<div>
                        <div style={imgContainer}><img src="../images/Eclipse.svg" alt="Chargement..."/></div>
                    </div>) :
                    (
                        rows
                    )
                }

                <Modal {...this.props} show={this.state.show}
                                       show={this.state.show}
                                       onHide={this.hideModal.bind(this)}
                                       dialogClassName="custom-modal"
                                       bsSize="lg" aria-labelledby="contained-modal-title-lg"
                >
                    <Modal.Header closeButton>
                        <Modal.Title id="contained-modal-title-lg">Ajouter un évènement</Modal.Title>
                    </Modal.Header>
                    <form onSubmit={this.handleSubmit}>
                        <Modal.Body>
                            <div className="form-group row">
                                <label htmlFor="textarea" className="col-sm-2 form-control-label">Date</label>
                                <div className="col-sm-4">
                                    <input type="date" ref={input => this._date = input} className="form-control"
                                           required/>
                                </div>
                            </div>
                            <div className="form-group row">
                                <label htmlFor="textarea" className="col-sm-2 form-control-label">Evenement</label>
                                <div className="col-sm-10 pull-right">
                                    <textarea id="textarea" cols="30" rows="10" ref={input => this._evenement = input}
                                              className="form-control" required></textarea>
                                </div>
                            </div>
                        </Modal.Body>
                        <Modal.Footer>
                            <Button bsStyle="warning" bsSize="xsmall" onClick=  {this.handleSubmit}>Ajouter</Button>
                            <Button onClick={this.hideModal.bind(this)} bsSize="xsmall">Fermer</Button>
                        </Modal.Footer>
                    </form>
                </Modal>
            </div>
        )
    }
}
