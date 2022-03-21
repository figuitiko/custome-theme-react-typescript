import React, { useContext } from 'react'
import AppContext from '../../../context/AppContext'

const MainCareersWidgetComponent = () => {
  const {careerContent, baseUrlTheme} = useContext(AppContext);
 const {title, subtitle} = careerContent.customizableCareer
  return (
    <div style={{background:`url(${baseUrlTheme}/img/careers/bg-main.png) center center/ cover no-repeat`}} 
            className="h-screen w-full flex flex-col justify-center items-center text-white ">
      <h1 className='font-bold text-5xl lg:text-7xl uppercase'>{title}</h1>
      <p className='w-auto lg:w-1/2 text-center'>{subtitle}</p>
    </div>
  )
}

export default MainCareersWidgetComponent