import React from 'react'
import ContactFormComponent from '../components/ui/contact/ContactFormComponent';
import AppContext from '../context/AppContext'
import AppContextInterface from '../interfaces/AppContextInterface';

const {Provider} = AppContext
const ContactScreen = ({nonce}:AppContextInterface) => {
  const baseUrlTheme = process.env.MIX_BASE_URL;
  const contextValue:AppContextInterface  ={
    nonce,
    baseUrlTheme: process.env.MIX_BASE_URL,
}
  return (
    <Provider value={contextValue}>

    <div style={{background:`url(${baseUrlTheme}/img/about/about_pattern.png) center center/ cover no-repeat`}} className='px-4 md:px-40 lg:px-60'>
      <ContactFormComponent />
      </div>
    </Provider>
  )
}

export default ContactScreen