import React from 'react'

interface Props{
    title:string;
    subtitle:string;
    btnText:string;
    btnLink:string;
    isCareer:boolean;
}

const AboutWidgetBoxComponent = ({title, subtitle, btnText, btnLink, isCareer}:Props) => {
  return (
    <div className='flex flex-col px-4 min-w-[320px]   lg:px-28  justify-center items-center'>
        <h3 className='text-5xl text-white font-bold uppercase my-8 text-center'>{title}</h3>
        <p className='text-white text-2xl my-8 text-center'>{subtitle}</p>
        <a className={`border-2 border-white inline-block px-8 text-center uppercase my-4 py-2 ${(isCareer) ?'bg-[#AFD93B] text-[#20437D]': 'text-white'}`} href={btnLink}>{btnText}</a>
    </div>
  )
}

export default AboutWidgetBoxComponent