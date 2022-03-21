import React from 'react';
import ReactDOM from 'react-dom';
import FooterComponent from './components/ui/footer/FooterComponent';
import HeaderComponent from './components/ui/header/HeaderComponent';
import AppContextInterface from './interfaces/AppContextInterface';


import "./main.css";
import AboutScreen from './pages/AboutScreen';
import BrandScreen from './pages/BrandScreen';
import CareerPage from './pages/CareerPage';
import ContactScreen from './pages/ContactScreen';
import HomeScreen from './pages/HomeScreen';


document.addEventListener('DOMContentLoaded',  ()=>{
    const headerEl = document.querySelector('#casautomative-header');
    const footerEl = document.querySelector('#casautomative-footer');
    const mainEl = document.querySelector('#casautomotive-main');
    const contactEl = document.querySelector('#casautomotive-contact');
   
    // console.log(data);
    const aboutEl = document.querySelector('#casautomotive-about');
    const brandEl = document.querySelector('#casautomotive-brand');
    const careerEl = document.querySelector('#casautomotive-career');

    if(!!headerEl){
        const preDataHeader = headerEl.querySelector('pre').innerHTML;
        const dataHeader:any = JSON.parse(preDataHeader);
        ReactDOM.render(<HeaderComponent {...dataHeader} />, headerEl);
    }

    if(!!mainEl){
        const preDataHeader = mainEl.querySelector('pre').innerHTML;
        const dataHome:AppContextInterface = JSON.parse(preDataHeader);
        ReactDOM.render(<HomeScreen  {...dataHome}  />, mainEl);
    }
    if(!!aboutEl){
        const preDataAbout = aboutEl.querySelector('pre').innerHTML;
        const dataAbout:AppContextInterface = JSON.parse(preDataAbout);
        ReactDOM.render(<AboutScreen {...dataAbout}/>, aboutEl);
    }
    if(!!brandEl){
        const preDataBrand = brandEl.querySelector('pre').innerHTML;
        const dataBrand:AppContextInterface = JSON.parse(preDataBrand);
        ReactDOM.render(<BrandScreen {...dataBrand}/>, brandEl);
    }
    if(!!careerEl){
        const preDataCareer = careerEl.querySelector('pre').innerHTML;
        const dataCareer:AppContextInterface = JSON.parse(preDataCareer);
       
        ReactDOM.render(<CareerPage {...dataCareer}/>, careerEl);
    }
    if(!!contactEl){
       const preDataContact = contactEl.querySelector('pre').innerHTML;
       const dataContact:AppContextInterface = JSON.parse(preDataContact);
       
        ReactDOM.render(<ContactScreen {...dataContact} />, contactEl);
    }
    if(!!footerEl){
        const preDataFooter = footerEl.querySelector('pre').innerHTML;
        const dataFooter:any = JSON.parse(preDataFooter);
        ReactDOM.render(<FooterComponent {...dataFooter} />, footerEl);
    }

});