/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors.js');
const plugin = require('tailwindcss/plugin.js');
const cssnano = require('cssnano');
const cfg = require('./config.json');

module.exports = {
    corePlugins: {
        container: false
    },
    safelist : [
        '.wpc-filters-ul-list'
    ],
    content: [`../../../themes/${cfg.themeName}/**/*.php`], important: false, theme: {
         extend: {
            height: {
                '102': 'calc(100vh - 102px)',
                '110': 'calc(100vh - 110px)',
            },
            width: {
                'third-gap': 'calc(33.333% - 14px)',
                'five-gap': 'calc(41.667% - 10px)',
                'seven-gap': 'calc(58.333% - 10px)',
                'half-gap': 'calc(50% - 10px)',
                'half-gap-mini': 'calc(50% - 5px)',
                'quarter-gap': 'calc(25% - 15px)',
            },
            dropShadow: {
             'approach': '0 0 6px rgba(0, 0, 0, .15)',
            },
            fontFamily: {
                'gilroy-regular': ['Gilroy-Regular', 'sans-serif'],
                'gilroy-bold': ['Gilroy-Bold', 'sans-serif'],
                'proximanova-light': ['ProximaNova-Light', 'sans-serif'],
                'proximanova-regular': ['ProximaNova-Regular', 'sans-serif'],
                'proximanova-semibold': ['ProximaNova-Semibold', 'sans-serif'],
                'proximanova-bold': ['ProximaNova-Bold', 'sans-serif'],
            }, colors: {
                 accent: '#1E1E5C',
                 accent_hover: '#58AAEB',
                 grey: '#868686',
                 content: '#0F0F0F',
                 cornflower: '#3B64A4',
                 celestial: '#B2D6E9',
                 topaz: '#7BB6E0',
                 graphite: '#275193',
                 intro_after: 'rgba(18, 18, 70, .42)',
                 'arrow-hover': 'rgba(88, 170, 235, 0.10)',
                 date: 'rgba(15, 15, 15, 0.50)',
                 size: 'rgba(30, 30, 92, 0.10)',
            }, screens: {
                 mobileMin: '360px',
                 mobile: '475px',
                 tabletMin: '768px',
                 tablet: '820px',
                 tabletMax: '1024px',
                 desktopMin: '1100px',
                 desktop: '1280px',
                 desktopMid: '1440px',
                 desktopMax: '1920px',
            }, viewport: {
                mobile: 320,
                tablet: 991,
                desktop: 1920,
            }, flex: {
                'header': '0 0 auto',
                'main': '1 0 auto',
                'footer': '0 0 auto',
            },
        }
    }, plugins: [
        require('postcss-import'),
        require('@tailwindcss/nesting')(require('postcss-nesting')),
        require('tailwindcss'),
        require('autoprefixer'),
        require('cssnano')({
            preset: 'default',
        }),
        plugin(function ({matchUtilities, theme}) {

            matchUtilities({
                "aspect-ratio": (value) => {
                    const styles = value.split("/");
                    const vwDesk = theme("viewport.desktop");
                    return {
                        width: '100%',
                        height: 'fit-content',
                        maxWidth: `${styles[0]}px`,
                        position: 'relative',
                        overflow: 'hidden',
                        '&::before': {
                            content: '""',
                            display: 'block',
                            width: '100%',
                            paddingTop: `${(styles[1] / styles[0]) * 100}%`,
                        },
                        [`@media (min-width: ${vwDesk}px)`]: {
                            maxWidth: `${(styles[0] / vwDesk) * 100}vw`,
                        },
                        'img': {
                            position: 'absolute',
                            left: '0',
                            top: '0',
                            width: '100%',
                            height: '100%',
                            objectFit: 'cover'
                        }
                    };
                },
                "resp": (value) => {
                    const styles = value.split("/");
                    const vwDesk = theme("viewport.desktop");
                    const vwMob = theme("viewport.mobile");

                    if (!styles[2]) {
                        styles.push(styles[1]);
                    }
                    const formula = `calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`;

                    switch (styles[0]) {
                        case 'font':
                            return {
                                fontSize: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    fontSize: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'line-height':
                            return {
                                lineHeight: `calc(${styles[1]} / ${styles[2]})`
                            };
                        case 'w-max':
                            return {
                                maxWidth: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    maxWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'w-min':
                            return {
                                minWidth: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    minWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'width':
                            return {
                                width: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    width: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'h-max':
                            return {
                                maxHeight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    maxWidth: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'h-min':
                            return {
                                minHeight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    minHeight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'height':
                            return {
                                height: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    height: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'px':
                            return {
                                paddingLeft: `${formula}`,
                                paddingRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                    paddingRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'py':
                            return {
                                paddingTop: `${formula}`,
                                paddingBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingTop: `${(styles[1] / vwDesk) * 100}vw`,
                                    paddingBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pt':
                            return {
                                paddingTop: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingTop: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pr':
                            return {
                                paddingRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pb':
                            return {
                                paddingBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'pl':
                            return {
                                paddingLeft: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    paddingLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mx':
                            return {
                                marginLeft: `${formula}`,
                                marginRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                    marginRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'my':
                            return {
                                marginTop: `${formula}`,
                                marginBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginTop: `${(styles[1] / vwDesk) * 100}vw`,
                                    marginBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mt':
                            return {
                                marginTop: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginTop: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mr':
                            return {
                                marginRight: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginRight: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'mb':
                            return {
                                marginBottom: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginBottom: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'ml':
                            return {
                                marginLeft: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    marginLeft: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap':
                            return {
                                gap: `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    gap: `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap-x':
                            return {
                                'column-gap': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'column-gap': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'gap-y':
                            return {
                                'row-gap': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'row-gap': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'right':
                            return {
                                'right': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'right': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'left':
                            return {
                                'left': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'left': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'top':
                            return {
                                'top': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'top': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'bottom':
                            return {
                                'bottom': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'bottom': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };
                        case 'svg-size':
                            return {
                                "svg": {
                                    width: `calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`,
                                    height: `calc(${styles[4]}px + ${styles[3] - styles[4]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob}))`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        width: `${(styles[1] / vwDesk) * 100}vw`,
                                        height: `${(styles[3] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'svg-width':
                            return {
                                "svg": {
                                    width: `${formula}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        width: `${(styles[1] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'svg-height':
                            return {
                                "svg": {
                                    height: `${formula}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        height: `${(styles[1] / vwDesk) * 100}vw`,
                                    },
                                },
                            };
                        case 'translate':
                            return {
                                'transform': `translate(calc(${styles[2]}px + ${styles[1] - styles[2]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob})) , calc(${styles[4]}px + ${styles[3] - styles[4]} * ((100vw - ${vwMob}px)/ ${vwDesk - vwMob})))`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translate(${(styles[1] / vwDesk) * 100}vw, ${(styles[3] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'translate-y':
                            return {
                                'transform': `translateY(${formula})`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translateY(${(styles[1] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'translate-x':
                            return {
                                'transform': `translateX(${formula})`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'transform': `translateX(${(styles[1] / vwDesk) * 100}vw)`,
                                },
                            };
                        case 'grid-col':
                            return {
                                'display': `grid`,
                                'grid-template-columns': `repeat(auto-fit, minmax(${styles[1]}px, 1fr))`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'grid-template-columns': `repeat(auto-fit, minmax(${(styles[1] / vwDesk) * 100}vw, 1fr))`,
                                },
                            };
                        case 'basis':
                            if (styles[3]) {
                                return {
                                    'flex-basis': `${formula}`,
                                    'flex-shrink': `${styles[3]}`,
                                    [`@media (min-width: ${vwDesk}px)`]: {
                                        'flex-basis': `${(styles[1] / vwDesk) * 100}vw`,
                                        'flex-shrink': `${styles[3]}`
                                    },
                                };
                            }

                            return {
                                'flex-basis': `${formula}`,
                                [`@media (min-width: ${vwDesk}px)`]: {
                                    'flex-basis': `${(styles[1] / vwDesk) * 100}vw`,
                                },
                            };

                    }
                },
            })
        })]
}