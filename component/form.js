import React, { Component } from 'react'
import Axios from 'axios'
import Modal2 from './modal2'
import Sindeuda from './retornos/sindeuda'


class Formulario extends Component{
    constructor(props){
        super(props);
    }
     
    componentDidMount(){   
     
    }
    
    state = {
        error: null,
        isLoaded: false,
        result:[] ,
        form:null,
        show: false,
        deuda: null
    }
    handleClick = (e) =>{
      /*  this.setState({
            isLoaded:true,
        })*/
       /* if((this.props.estado.form.name != '') && (this.props.estado.form.name != undefined)){
            this.apii(this.props.estado.form);
        }*/
        
        this.llamado();
    }
    llamado = () =>{
        this.api2();
     }

    
  
     api2 = async () =>{
        const token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjY3MTJGNTVCQUFENDYyRTE1QzYyNEYwRDFFNTFFNzk4NThGRTNCMkYiLCJ0eXAiOiJKV1QifQ.eyJFbXByZXNhIjoiQkNDVEVTVCIsIm5iZiI6MTU3MzgzMDExNCwiZXhwIjoxNjA1MzY2MTE0LCJpYXQiOjE1NzM4MzAxMTQsImlzcyI6IkFQSVB1YmxpY2FBc3ludGVjIiwiYXVkIjoiQVBJUHVibGljYUFzeW50ZWMifQ.h3MXFqsn4SGkh_eP3dbxiZdMa27EIypOYR95BsgsD3fp9KKjai-Db6KraSq5YCbuCUvvjRi8KGlWXYIpc-L59YnFaBmg82DfcUVU3QB3YRQ4bffG2wNVM0lLmlnUXjYF99hBHFyEwu4r4sLFM7PkFuyAsOsk22KoHPsRsjVklcOkqqylvHXo8tbhEhmI2Jbac-73nxSEsDaEf9Z8fmKYDzsZxVbZ5_Fq_KYX3fwBpx61dSiNLlbv3ibvBEtJhpyv8VrqvpXchyQ_antGIok1AhZcuwDXPf5YnFcUSF26qFNyouwkV27xrOkoFHw1jcS-Vk84QNwGtkeJAR7MPhs6FA';
        
        const config = {
            headers: { Authorization: `Bearer ${token}` }
        };
         const response = await Axios.get('http://asyntecpublico.asyntec.com/Pago/Consultar/Servicio/V3/200927',config)
         try{
 
                 console.log(response)
             }
                 catch(error){
 
                     console.log(error)
             } 
     }

    handleSubmit = (e) =>{
        e.prevenDefault();
    };
    hideModal = (e) => {
        this.setState({ show: false });
      }
    resetstatedeuda = ()=>{
        this.setState({ deuda: null });
    }


    render(){
        const { error, isLoaded, result ,deuda} = this.state;
        return(
            <div className="col-md-3">
                <h4 className="h4 text-uppercase color-primary font-weight-bold">paga tu </h4>
                <h4 className="h4 text-uppercase color-primary font-weight-bold">cuenta </h4>
                <form onSubmit={this.handleSubmit }  onKeyPress={(e) => { e.key === 'Enter' && e.preventDefault(); }}>
                    <div className="form-group">
                        <input type="text" className="form-control" name="name" placeholder="ID de Servicio"onKeyPress={(e) => { e.key === 'Enter' && e.preventDefault(); }}  onChange={this.props.onChange} required />
                        { isLoaded ? <div> Cargando... </div> : <input type="button" 
                            onClick={this.handleClick} 
                            className="btn btn-primary pull-right mt-3" 
                            value="Submit" /> }
                        { deuda === 'no posee deuda' ? (<Sindeuda estado={this.state} ondeuda={this.resetstatedeuda} /> ):
                        (
                            deuda === 'si posee deuda' && (<Modal2 show={this.state.show} handleClose={this.hideModal} estado={this.props.estado.form} >
                                <p>Modal</p>
                            </Modal2>)
                        ) }
                    </div>
                </form>
            </div>
        )
    }
}
export default Formulario