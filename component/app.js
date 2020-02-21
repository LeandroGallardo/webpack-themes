import React from 'react'
import Formulario from './form'
import Modal from './modal'
import Api from './api'
import App2 from './app2'

class App extends React.Component{
    constructor(){
        super();
    }
    
    state = { 
        form: {},
        estado:null 
    };
    handleChange = e => {
        this.setState({
            form:{
                [e.target.name] : e.target.value,
            }
        })
    }
    handleClick(e){
       this.Api.llamado();

    };
    render () {
        
        return(  
            <div className="d-flex py-5 h-100">
                <Api estado={this.state.estado} apii={this.handleClick}/>
                <Formulario onChange={this.handleChange} onClick={this.handleClick} estado={this.state} />
            </div>
         )
    }
   
}
export default App