import React from 'react';
import './Footer.css';
import { assets } from '../../assets/assets'; // ✅ Add this line (adjust path as needed)

const Footer = () => {
  return (
    <div className='footer' id='footer'>
      <div className="footer-content">
        <div className="footer-content-left">
          <img src={assets.logo} alt="Logo" />
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio maxime repellat, dolore incidunt tempore vero cupiditate! Praesentium laboriosam sunt expedita pariatur natus et, est, corporis explicabo, quod maiores perspiciatis impedit.</p>
          <div className="footer-social-icons">
            <img src={assets.facebook_icon} alt="Facebook" />
            <img src={assets.twitter_icon} alt="Twitter" />
            <img src={assets.linkedin_icon} alt="LinkedIn" />
          </div>
        </div>
        <div className="footer-content-center">
          {/* Add center footer content here */}
          <h2>COMPANY</h2>
          <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Delivery</li>
            <li>Privacy Policy</li>
          </ul>
        </div>
        <div className="footer-content-right">
          {/* Add right footer content here */}
          <h2>GET IN TOUCH</h2>
          <ul>
            <li>+91 123456789</li>
            <li>contact@tomato.com</li>
          </ul>
        </div>
      </div>
      <hr />
      <div className="footer-copyright">Copyright &copy; 2025. All rights reserved</div>
    </div>
  );
};

export default Footer;
