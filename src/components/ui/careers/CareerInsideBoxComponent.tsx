import React from 'react'
interface Props{
    pictureUrl:string;
    heading:string;
    text:string;
    isLeft:boolean;
}
const CareerInsideBoxComponent = ({pictureUrl, heading, text, isLeft}:Props) => {
  return (
    <div className={` flex ${isLeft?'lg:flex-row':'lg:flex-row-reverse'} flex-col items-center lg:items-start`}>
        <picture className='w-auto lg:w-1/2'>
        <img className='w-full h-full object-cover' src={pictureUrl} />
        </picture>
        <div className='w-auto lg:w-1/2 py-16 px-8 text-center lg:text-left'>
            <h2 className='text-5xl font-extrabold text-[#23457c] mb-4'>{heading}</h2>
            <p>{text}</p>
        </div>
    </div>
  )
}

export default CareerInsideBoxComponent