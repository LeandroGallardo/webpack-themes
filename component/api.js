import React, { Component, Fragment } from 'react';
import Axios from 'axios';

class Api extends Component{
    constructor(props){
        super(props)
    }
    state = { 
        error: null,
        isLoaded: false,
        result:[] 
    }
    componentDidMount(){      
      // this.api();
      //this.props.apii
    }
   
    llamado = () =>{
       this.api2();
    }
 
    api2 = async () =>{
        
        const token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjY3MTJGNTVCQUFENDYyRTE1QzYyNEYwRDFFNTFFNzk4NThGRTNCMkYiLCJ0eXAiOiJKV1QifQ.eyJFbXByZXNhIjoiQkNDVEVTVCIsIm5iZiI6MTU3MzgzMDExNCwiZXhwIjoxNjA1MzY2MTE0LCJpYXQiOjE1NzM4MzAxMTQsImlzcyI6IkFQSVB1YmxpY2FBc3ludGVjIiwiYXVkIjoiQVBJUHVibGljYUFzeW50ZWMifQ.h3MXFqsn4SGkh_eP3dbxiZdMa27EIypOYR95BsgsD3fp9KKjai-Db6KraSq5YCbuCUvvjRi8KGlWXYIpc-L59YnFaBmg82DfcUVU3QB3YRQ4bffG2wNVM0lLmlnUXjYF99hBHFyEwu4r4sLFM7PkFuyAsOsk22KoHPsRsjVklcOkqqylvHXo8tbhEhmI2Jbac-73nxSEsDaEf9Z8fmKYDzsZxVbZ5_Fq_KYX3fwBpx61dSiNLlbv3ibvBEtJhpyv8VrqvpXchyQ_antGIok1AhZcuwDXPf5YnFcUSF26qFNyouwkV27xrOkoFHw1jcS-Vk84QNwGtkeJAR7MPhs6FA';
        Axios.defaults.baseURL = 'http://asyntecpublico.asyntec.com/Pago/Consultar/Servicio/V3/200927';
        Axios.defaults.headers.common['Authorization'] = token;
        Axios.defaults.headers.post['Content-Type'] ='application/json;charset=utf-8';
        Axios.defaults.headers.post['Access-Control-Allow-Origin'] = true;

        const response = await Axios.get()
        try{

                console.log(response)
            }
                catch(error){

                    console.log(error)
            } 
    }

    render(){
        return (
            <React.Fragment>
            
            </React.Fragment>
        )
    }
}
export default Api