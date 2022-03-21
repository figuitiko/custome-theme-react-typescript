import React from 'react'
interface Props{
   featureImg:string ;
   icon:string;
   title:string;
   subtitle:string;
   link:string;
   baseUrl:string;
   textLink:string;
   iconName:string;
}
const RightImgBoxComponent = ({featureImg, icon, title, subtitle, link, baseUrl, textLink, iconName}:Props) => {
  return (
    <div className='flex  flex-col-reverse lg:flex-row my-8'>
        
        <div className='flex flex-col w-auto items-start lg:w-1/2 lg:p-6'>
            <picture className='hidden md:block my-0 lg:my-4 '>
                <img  src={icon} />
            </picture>
            <span className='font-bold mb-4'>
                {subtitle}
            </span>
            <p className='mb-4'>
                {title}
            </p>
            <a href={link} className="flex gap-2">
                <picture>
                    <img src={`${baseUrl}/img/brands/icon_link.png`} />
                </picture>
                <span className='text-[#4397d1] font-medium hover:underline'>
                    {textLink}
                </span>
                
            </a>
        </div>
        <picture className='w-auto lg:w-1/2 min-w-[320px]' >
            <img className='object-cover relative ' src={featureImg} />
            <img className={`block md:hidden relative top-[-100px] ${(iconName == 'ShipMax' || iconName === 'smax')? 'left-0' :'left-[25%]'}`} src={`${baseUrl}/img/brands/icons/${iconName}.png`} />
        </picture>
    </div>
  )
}

export default RightImgBoxComponent