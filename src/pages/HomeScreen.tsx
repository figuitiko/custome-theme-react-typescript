import React from 'react'
import AboutWidgetComponent from '../components/ui/home/about-widget/AboutWidgetComponent';
import BrandWidgetComponent from '../components/ui/home/brand-widget/BrandWidgetComponent';
import MainWidgetComponent from '../components/ui/home/MainWidgetComponent';
import AppContext from '../context/AppContext'
import AppContextInterface from '../interfaces/AppContextInterface';


const {Provider} = AppContext;

const HomeScreen = ({ homeContent}:AppContextInterface) => {

  const contextValue: AppContextInterface = {
    homeContent,
    baseUrlTheme: process.env.MIX_BASE_URL
  }

  return (
    <Provider value={contextValue}>
     <MainWidgetComponent />
    <BrandWidgetComponent />
    <AboutWidgetComponent />
    </Provider>
  )
}

export default HomeScreen