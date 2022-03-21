import React from 'react'
import AppContext from '../../../context/AppContext';
import AppContextInterface from '../../../interfaces/AppContextInterface';
import MainBrandComponent from './MainBrandComponent'
import NavBarComponent from './NavBarComponent'
import TopBarComponent from './TopBarComponent'

const {Provider} = AppContext;
const HeaderComponent = ({topbar,headerLogo, menu}:AppContextInterface) => {
  
  const contextValue:AppContextInterface = {
    topbar,
    baseUrlTheme:'/wp-content/themes/casautomotive/src',
    headerLogo,
    menu
  }
  return (
    <Provider value={contextValue}>
      <header className='casautomotive-layout-section'>
      <MainBrandComponent />
      <TopBarComponent />
      <NavBarComponent  />
      </header>
    </Provider>
    
  )
}

export default HeaderComponent