import React from 'react'

interface Props{
    imgUrl: string;
    subtitle:string;
    btnText1:string;
    btnLink1:string;
    btnText2:string;
    btnLink2:string;
}
const MissionSecondaryComponent = ({imgUrl, subtitle, btnText1, btnLink1, btnText2, btnLink2}:Props) => {
  return (
    <div className='px-4 lg:px-60 grid grid-cols-2 lg:flex justify-center items-center border-0 '>
        <picture className='w-auto lg:w-1/4 px-0 lg:px-8 col-start-2'>
            <img className='min-w-[120px]' src={imgUrl} />
        </picture>
        <div className='flex flex-col w-auto lg:w-1/3 items-start col-start-1 row-start-1'>
            <p className='text-sm lg:text-2xl text-main-color my-8'>{subtitle}</p>
            <a className='block px-4 py-2 text-sm lg:text-xl font-bold text-main-color bg-[#afd93b] text-center  w-[180px]  lg:w-[280px] my-4 hover:text-white ' href={btnLink2} target="_blank">{btnText1}</a>
            <a className='block px-4 py-2 text-sm lg:text-xl font-bold text-main-color border-2 border-[#afd93b] text-center w-[180px]  lg:w-[280px] hover:text-[#afd93b] ' href={btnLink1} target="_blank">{btnText2}</a>
        </div>
    </div>
  )
}

export default MissionSecondaryComponent