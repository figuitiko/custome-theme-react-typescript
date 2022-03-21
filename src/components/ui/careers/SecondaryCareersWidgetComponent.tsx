import React, { useContext } from 'react'
import AppContext from '../../../context/AppContext'
import CareerBoxComponent from './CareerBoxComponent';

const SecondaryCareersWidgetComponent = () => {
  const {careerContent} = useContext(AppContext);
  const {careersCpt} = careerContent;
   console.log(careersCpt)
  return (
    <div className='flex flex-col items-center px-4 lg:px-60 my-8'>
      <h2 className='text-[#23457c] text-5xl my-8'>New Opportunities</h2>
      {
       careersCpt.length > 0 &&
        careersCpt.map((item,idx)=>(
          <CareerBoxComponent {...item}  key={idx}/>
        ))
      }
    </div>
    
  )
}

export default SecondaryCareersWidgetComponent