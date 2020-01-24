import React, { Component } from 'react';
import Axios from 'axios';

class Pokeapi extends Component{
    state = { 
        error: null,
        isLoaded: false,
        pokes:[] 
    }
    componentDidMount(){      
       this.getPokes();
    }
  
    getPokes = async () =>{
        const response= await Axios.get('https://pokeapi.co/api/v2/pokemon/')
        try{
           // console.log(response)
            this.setState({
                pokes:response,
                isLoaded:true
            })
            console.log(this.state.pokes.data)
        }
        catch(error){
            this.setState({
                isLoaded:true,
                error
            })
            console.log(error)
        }

    }

    render(){
        const { error, isLoaded, pokes } = this.state;
        if (error){
            return <div>Error al conectar con la api</div>
        } else if(!isLoaded){
            return <div>cargando contenido</div>
        }else{
          
        return(
                <ul>
                   {    console.log(pokes) }
                      
                   { pokes.data.results.map((poke,i) => (
                        <li key={i}>
                            {poke.name} 
                        </li>
                    ))
                   }
                </ul>
            );
        }
    }
}
export default Pokeapi