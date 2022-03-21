import React, { useState } from 'react';
import { FiChevronDown, FiChevronUp } from "react-icons/fi";

interface Props{
    language:string;
    allLanguages:Array<string>;
    handleLanguage:(language:string)=>void,
    baseUrl?:string
}
const TopBarLanguageComponent = ({language, allLanguages, handleLanguage, baseUrl}:Props) => {
  const [isEnable, setIsEnable] = useState(false)
    
   console.log(language)
  return (
    <div className='flex px-1 lg:px-4 gap-2'>
        <picture className='min-w-[25px]'>
            <img src={`${baseUrl}/img/${language}.png`} />
        </picture>
        <div className='flex'>
            {
            !isEnable ?

                <div className='cursor-pointer z-10' onClick={()=>setIsEnable(true)}>

                    <FiChevronUp />
                </div>
                :
                <div className='cursor-pointer z-10' onClick={()=>setIsEnable(false)}>

                    <FiChevronDown />
                </div>
            }
            
            {
                isEnable &&
                  <ul className='absolute'>
                      {
                          allLanguages.map((item, idx) => (
                              <li className='py-0 px-4 cursor-pointer bg border-b-2' key={idx} value={idx} onClick={(e)=>handleLanguage(item)}>{item}</li>
                          ))
                      }

                  </ul>
                 
            }
        
        </div>
        
    </div>
  )
}

export default TopBarLanguageComponent