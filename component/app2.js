import React, { Component } from 'react';
import Modal2 from './modal2'

class App2 extends React.Component {
    state = { show: false }
  
    showModal = () => {
      this.setState({ show: true });
    }
    
    hideModal = () => {
      this.setState({ show: false });
    }
      
    render() {
      return (
        <main>
          <h1>React Modal</h1>
          <Modal2 show={this.state.show} handleClose={this.hideModal} >
            <p>Modal</p>
            <p>Data</p>
          </Modal2>
          <button type='button' onClick={this.showModal}>Open</button>
        </main>
      )
    }
  }
  export default App2