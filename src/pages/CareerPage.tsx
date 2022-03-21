import React from 'react'
import MainCareersWidgetComponent from '../components/ui/careers/MainCareersWidgetComponent'
import SecondaryCareersWidgetComponent from '../components/ui/careers/SecondaryCareersWidgetComponent'
import AppContext from '../context/AppContext'
import AppContextInterface from '../interfaces/AppContextInterface'

const {Provider} = AppContext
const CareerPage = ({careerContent}:AppContextInterface) => {
  const contextValue:AppContextInterface = {
    careerContent,
    baseUrlTheme: process.env.MIX_BASE_URL,
  }

  return (
    <Provider value={contextValue}>
    <div className='flex flex-col'>
      <MainCareersWidgetComponent />
      <SecondaryCareersWidgetComponent />
    </div>
    </Provider>
  )
}

export default CareerPage