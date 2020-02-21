import React from 'react';



const Modal2 = ({ handleClose, show, children, estado }) => {

    const showHideClassName = show ? 'modal display-block' : 'modal display-none';
 
    return (
      <div className="modal bd-example-modal-lg" className={showHideClassName }>
        <div className="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div className="modal-content">
          <section className='modal-main2'>
            <p className="h2">{estado.name}</p>
            {children}

          </section>
          <div className="modal-footer">
            <button type="button" className="btn btn-secondary" onClick={handleClose}>Close</button>
          </div>
          </div>
        </div>
      </div>
    );
  };

  export default Modal2
  