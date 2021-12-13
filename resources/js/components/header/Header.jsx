import React from 'react';
import headerStyle from './header.module.scss';
const Header = () => {
    return (
        <div className={headerStyle.header}>
            <h2><a href="/">React + Laravel</a></h2>
            <nav>
                <ul>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
        </div>
    );
};

export default Header;
