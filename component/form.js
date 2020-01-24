import React, { Component } from 'react'

class Formulario extends Component{

    
    handleChange(e){
 
    };
   
    handleClick(e){
        console.log(e)
    };

    handleSubmit(e){
        e.prevenDefault();
        
    };
    
    render(){
        return(
            <div className="col-3">
                <h4 className="h4 text-uppercase color-primary font-weight-bold">paga tu </h4>
                <h4 className="h4 text-uppercase color-primary font-weight-bold">cuenta </h4>
                <form onSubmit={this.handleSubmit}>
                    <div className="form-group">
                        <input type="text" className="form-control" name="name" placeholder="ID de Servicio" onChange={this.handleChange}/>
                        <input type="button" 
                            onClick={this.handleClick} 
                            className="btn btn-primary pull-right mt-3" 
                            value="Submit" 
                            data-toggle="modal" 
                            data-target="#exampleModalCenter"/>
                    </div>
                </form>
            </div>
        )
    }
}
export default Formulario