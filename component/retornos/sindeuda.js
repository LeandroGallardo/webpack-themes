import React from 'react'
import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'

class Sindeuda extends React.Component{
    constructor(props){
        super(props)          
    }
    componentDidMount() {
        const MySwal = withReactContent(Swal)
        MySwal.fire({
            icon: 'success',
            title: <p>No tiene Deuda</p>,
            showConfirmButton: true,
            onOpen: () => {
            // `MySwal` is a subclass of `Swal`
            //   with all the same instance & static methods
            MySwal.clickConfirm()
            }
        }).then(() => {
            return MySwal.fire(<p>No tiene Deuda</p>)
        })
       console.log( this.props)
       this.props.ondeuda()
    }
  
    render() {
        return (
            <div>
                
                
            </div>
        );
    }
}
export default Sindeuda