import React from 'react'
import AppContext from '../../../context/AppContext'
import AppContextInterface from '../../../interfaces/AppContextInterface';
import FooterBrandComponent from './FooterBrandComponent';
import FooterCpComponent from './FooterCpComponent';
import FooterNavComponent from './FooterNavComponent';
import FooterSocialComponent from './FooterSocialComponent';

const {Provider} = AppContext;
const FooterComponent = ({menu, footerData, topbar}:AppContextInterface) => {
  const contextValue:AppContextInterface = {
    menu,
    baseUrlTheme:'/wp-content/themes/casautomotive/src',
    footerData,
    topbar
    
  }
  
  return (
    <Provider value={contextValue}>

      <footer className='casautomotive-layout-section-footer  border-t-2 lg:border-t-[#afd93b] pt-8'>
        <FooterBrandComponent />
        <FooterNavComponent />
        <FooterCpComponent />
        <FooterSocialComponent />


      </footer>
    </Provider>
  )
}

export default FooterComponent