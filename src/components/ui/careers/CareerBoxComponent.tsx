import React, { useContext, useEffect, useState } from 'react'
import AppContext from '../../../context/AppContext'
import { Career } from '../../../interfaces/CareerInterfaces'
import CareerInsideBoxComponent from './CareerInsideBoxComponent'


const CareerBoxComponent = ({title, lookingImgUrl, lookingHeading, lookingContent, offerImgUrl, offerHeading, offerContent}:Career) => {
    const {baseUrlTheme} = useContext(AppContext);
    const [isOpen, setIsOpen] = useState(false);
    const [isVisible, setIsVisible] = useState(false);
    useEffect(()=>{
        if(isOpen){
            setIsVisible(true);
        }else{
            setIsVisible(false);
        }
    },[isOpen])
  return (
     
    <>
    <div className='border-[1px] flex justify-center items-center w-full py-2 '>
        <span className='m-auto text-[#2995c0] text-3xl flex text-center +-'>{title}
        
        </span>
        <picture className= {` cursor-pointer ${isOpen ? 'rotate-90':''} transition-all`} onClick={()=>setIsOpen(!isOpen)} >
            <img className='w-[80%]'  src={`${baseUrlTheme}/img/careers/icon-circle.png`}  />
        </picture>
        </div>
        {
           isOpen &&
        <div className= {`flex flex-col ${ !isVisible? 'scale-0': 'scale-100 '}  transition-all delay-300 `}>
            <CareerInsideBoxComponent pictureUrl={lookingImgUrl} heading={lookingHeading} text={lookingContent} isLeft={true}   />
            <CareerInsideBoxComponent pictureUrl={offerImgUrl} heading={offerHeading} text={offerContent} isLeft={false}   />
        </div>
        }
    </>
  )
}

export default CareerBoxComponent