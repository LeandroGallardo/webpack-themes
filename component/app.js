import React from 'react'
import Formulario from './form'
import Modal from './modal'
import Pokeapi from './pokeapi'

class App extends React.Component{
    state = {form:{}};
    render () {
        return(  
            <div className="d-flex py-5 h-100">
                <Pokeapi />
                <Formulario />
                <Modal />
            </div>
         )
    }
   
}
export default App