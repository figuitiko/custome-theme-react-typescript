import React from 'react'

interface Props{
    brand:string;
    link?:string;
}
const BrandWidgetBoxComponent = ({brand, link}:Props) => {
  return (
    <a href={link} className='' target="_blank">
    <picture className=''>
        <img className='object-cover float-left w-[150px] md:w-[300px] h-[150px] md:h-[300px]' src={brand}  />
    </picture>

    </a>
  )
}

export default BrandWidgetBoxComponent