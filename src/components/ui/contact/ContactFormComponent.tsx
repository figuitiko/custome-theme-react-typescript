import React, { useContext, useEffect, useState } from 'react';
import { useForm, SubmitHandler } from "react-hook-form";
import AppContext from '../../../context/AppContext';
import AppContextInterface from '../../../interfaces/AppContextInterface';
import axios from "axios";
import LoadingOverlay from 'react-loading-overlay';

type Inputs = {
    userName: string,
    email: string,
    phoneNumber: string,
    department: string,
    subject:string,
    msg:string,
};

const ContactFormComponent = () => {
    const {nonce, baseUrlTheme}:AppContextInterface = useContext(AppContext)
    const { register, handleSubmit, watch, formState: { errors }, reset } = useForm<Inputs>();
    const [isActive, setIsActive] = useState(false);
    const [isSent,setIsSent] = useState(false)
    const onSubmit: SubmitHandler<Inputs> = async(data) => {
        console.log(data);
        setIsActive(true);
        try {
            const response =  axios.post(`${process.env.MIX_ENDPOINT_CONTACT}/?_wpnonce=${nonce}`, {data});
            console.log(response)
            setIsActive(false);
            setIsSent(true);
        } catch (error) {
            
        }

    };
    useEffect(()=>{
        if(isSent){
            reset();
            setIsSent(false)
        }
    }, [isSent])
    

    return (
        <div className='flex flex-col items-center'>
            <h2 className='text-5xl md:text-7xl text-[#23457c] lg:mb-16  '>Get in touch</h2>
            <div className='flex justify-center lg:justify-start'>
                <LoadingOverlay
                    active={isActive}
                    spinner
                    text='Loading your content...'
                    className='w-auto lg:w-1/2'
                >
                <form className='flex flex-col p-2  lg:p-8' onSubmit={handleSubmit(onSubmit)}>
                    <p>
                        If you would like to get in touch with us, please fill out the form below and a representative
                        will reach back out to you within 24-48 hours.
                    </p>
                    {/* register your input into the hook by invoking the "register" function */}
                    <label className='text-[#23457c] uppercase'>Name:</label>
                    <input className='border-[1px] mb-4  focus:outline-[#23457c] '  {...register("userName", { required: true })} />
                    {errors.userName && <small className='text-red-400'>This field is required</small>}



                    <label className='text-[#23457c] uppercase' >Email Address:</label>
                    <input className='border-[1px] mb-4  focus:outline-[#23457c]' {...register("email", { required: true, pattern: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ })} />
                    {errors.email && <small className='text-red-400'>This field is required and should be an Email</small>}

                    <label className='text-[#23457c] uppercase'>Phone Number:</label>
                    <input className='border-[1px] mb-4  focus:outline-[#23457c]'  {...register("phoneNumber", { required: true })} />
                    {errors.phoneNumber && <small className='text-red-400'>This field is required</small>}


                    <select className='border-[1px] mb-4  focus:outline-[#23457c] text-[#909090] uppercase' name="Title" {...register("department", { required: true })}>
                        <option  value="">-Select-</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Miss">Miss</option>
                        <option value="Dr">Dr</option>
                    </select>

                    <label className='text-[#23457c] uppercase'>subject:</label>
                    <input className='border-[1px] mb-4  focus:outline-[#23457c]'  {...register("subject", { required: true })} />
                    {errors.subject && <small className='text-red-400'>This field is required</small>}

                    <label className='text-[#23457c] uppercase'>subject:</label>
                    <textarea className='border-[1px] mb-4  focus:outline-[#23457c]' {...register("msg", { required: true })}>

                    </textarea>
                    {errors.msg && <small className='text-red-400'>This field is required</small>}
                    <button className='lg:self-start bg-[#b0d749] rounded-[3px] border-2 border-[#b0d749] px-8 py-1 uppercase text-[10px]' type="submit" >Send Message</button>
                </form>
                </LoadingOverlay>
                <picture  className=' hidden lg:block w-auto lg:w-1/2 '>
                    <img src={`${baseUrlTheme}/img/contact/side-img.webp`} />
                </picture>
            </div>
        </div>
    )
}

export default ContactFormComponent