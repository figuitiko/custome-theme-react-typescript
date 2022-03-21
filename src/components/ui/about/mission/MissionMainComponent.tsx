import React from 'react'

interface Props{
    title:string,
    subtitle:string
}

const MissionMainComponent = ({title, subtitle}:Props) => {
  return (
    <div className='flex flex-col items-center justify-center bg-[#23457c] py-32 opacity-90 px-8 '>
        <h2 className='text-white text-6xl'>{title}</h2>
        <span className=' text-2xl w-auto lg:w-1/3 block text-center text-white my-8'>{subtitle}</span>
    </div>
  )
}

export default MissionMainComponent