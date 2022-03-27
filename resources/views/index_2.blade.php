    <style id="style_ladi"
           type="text/css">a, abbr, acronym, address, applet, article, aside, audio, b, big, blockquote, body, button, canvas, caption, center, cite, code, dd, del, details, dfn, div, dl, dt, em, embed, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hgroup, html, i, iframe, img, input, ins, kbd, label, legend, li, mark, menu, nav, object, ol, output, p, pre, q, ruby, s, samp, section, select, small, span, strike, strong, sub, summary, sup, table, tbody, td, textarea, tfoot, th, thead, time, tr, tt, u, ul, var, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block
        }

        body {
            line-height: 1
        }

        a {
            text-decoration: none
        }

        ol, ul {
            list-style: none
        }

        blockquote, q {
            quotes: none
        }

        blockquote:after, blockquote:before, q:after, q:before {
            content: '';
            content: none
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        .ladi-html strong {
            font-weight: 700
        }

        .ladi-html em {
            font-style: italic
        }

        .ladi-html a {
            text-decoration: underline
        }

        body {
            font-size: 12px;
            -ms-text-size-adjust: none;
            -moz-text-size-adjust: none;
            -o-text-size-adjust: none;
            -webkit-text-size-adjust: none;
            background: #fff
        }

        .ladi-loading {
            width: 80px;
            height: 80px;
            z-index: 900000000000;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            overflow: hidden
        }

        .ladi-loading div {
            position: absolute;
            width: 6px;
            height: 6px;
            background: #fff;
            border-radius: 50%;
            animation: ladi-loading 1.2s linear infinite
        }

        .ladi-loading div:nth-child(1) {
            animation-delay: 0s;
            top: 37px;
            left: 66px
        }

        .ladi-loading div:nth-child(2) {
            animation-delay: -.1s;
            top: 22px;
            left: 62px
        }

        .ladi-loading div:nth-child(3) {
            animation-delay: -.2s;
            top: 11px;
            left: 52px
        }

        .ladi-loading div:nth-child(4) {
            animation-delay: -.3s;
            top: 7px;
            left: 37px
        }

        .ladi-loading div:nth-child(5) {
            animation-delay: -.4s;
            top: 11px;
            left: 22px
        }

        .ladi-loading div:nth-child(6) {
            animation-delay: -.5s;
            top: 22px;
            left: 11px
        }

        .ladi-loading div:nth-child(7) {
            animation-delay: -.6s;
            top: 37px;
            left: 7px
        }

        .ladi-loading div:nth-child(8) {
            animation-delay: -.7s;
            top: 52px;
            left: 11px
        }

        .ladi-loading div:nth-child(9) {
            animation-delay: -.8s;
            top: 62px;
            left: 22px
        }

        .ladi-loading div:nth-child(10) {
            animation-delay: -.9s;
            top: 66px;
            left: 37px
        }

        .ladi-loading div:nth-child(11) {
            animation-delay: -1s;
            top: 62px;
            left: 52px
        }

        .ladi-loading div:nth-child(12) {
            animation-delay: -1.1s;
            top: 52px;
            left: 62px
        }

        @keyframes ladi-loading {
            0%, 100%, 20%, 80% {
                transform: scale(1)
            }
            50% {
                transform: scale(1.5)
            }
        }

        .overflow-hidden {
            overflow: hidden
        }

        .ladi-transition {
            transition: all 150ms linear 0s
        }

        .opacity-0 {
            opacity: 0
        }

        .height-0 {
            height: 0 !important
        }

        .transition-readmore {
            transition: height 350ms linear 0s
        }

        .transition-collapse {
            transition: height 150ms linear 0s
        }

        .transition-parent-collapse-height {
            transition: height 150ms linear 0s
        }

        .transition-parent-collapse-top {
            transition: top 150ms linear 0s
        }

        .pointer-events-none {
            pointer-events: none
        }

        .ladipage-message {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 10000000000;
            background: rgba(0, 0, 0, .3)
        }

        .ladipage-message .ladipage-message-box {
            width: 400px;
            max-width: calc(100% - 50px);
            height: 160px;
            border: 1px solid rgba(0, 0, 0, .3);
            background-color: #fff;
            position: fixed;
            top: calc(50% - 155px);
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 10px
        }

        .ladipage-message .ladipage-message-box span {
            display: block;
            background-color: rgba(6, 21, 40, .05);
            color: #000;
            padding: 12px 15px;
            font-weight: 600;
            font-size: 16px;
            line-height: 16px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px
        }

        .ladipage-message .ladipage-message-box .ladipage-message-text {
            display: -webkit-box;
            font-size: 14px;
            padding: 0 20px;
            margin-top: 10px;
            line-height: 18px;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .ladipage-message .ladipage-message-box .ladipage-message-close {
            display: block;
            position: absolute;
            right: 15px;
            bottom: 10px;
            margin: 0 auto;
            padding: 10px 0;
            border: none;
            width: 80px;
            text-transform: uppercase;
            text-align: center;
            color: #000;
            background-color: #e6e6e6;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            line-height: 14px;
            font-weight: 600;
            cursor: pointer
        }

        .ladi-wraper {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            overflow: hidden
        }

        .ladi-section {
            margin: 0 auto;
            position: relative
        }

        .ladi-section[data-tab-id] {
            display: none
        }

        .ladi-section.selected[data-tab-id] {
            display: block
        }

        .ladi-section .ladi-section-arrow-down {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-section .ladi-section-close {
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-section .ladi-section-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden
        }

        .ladi-container {
            position: relative;
            margin: 0 auto;
            height: 100%
        }

        .ladi-element {
            position: absolute
        }

        .ladi-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            pointer-events: none
        }

        .ladi-survey {
            width: 100%;
            display: inline-block
        }

        .ladi-survey .ladi-survey-option {
            cursor: pointer;
            position: relative;
            display: inline-block;
            text-decoration-line: inherit;
            -webkit-text-decoration-line: inherit;
            transition: inherit;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-survey .ladi-survey-option-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            transition: inherit
        }

        .ladi-survey .ladi-survey-option-label {
            display: block;
            text-decoration-line: inherit;
            -webkit-text-decoration-line: inherit;
            position: relative
        }

        .ladi-survey .ladi-survey-option-image {
            background-size: cover;
            background-position: center center;
            pointer-events: none;
            vertical-align: middle;
            border-radius: inherit;
            position: relative
        }

        .ladi-survey .ladi-survey-button-next {
            display: block
        }

        .ladi-survey .ladi-survey-button-next.empty {
            display: none
        }

        .ladi-survey .ladi-survey-button-next.no-select {
            display: none
        }

        .ladi-survey .ladi-survey-button-next button {
            background-color: #fff;
            border: 1px solid #eee;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 2px
        }

        .ladi-survey .ladi-survey-button-next button:active {
            transform: translateY(2px);
            transition: transform .2s linear
        }

        .ladi-carousel {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            touch-action: pan-y
        }

        .ladi-carousel .ladi-carousel-content {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            transition: left 350ms ease-in-out
        }

        .ladi-carousel .ladi-carousel-arrow {
            position: absolute;
            top: calc(50% - (33px) / 2);
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-carousel .ladi-carousel-arrow-left {
            left: 5px;
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        .ladi-carousel .ladi-carousel-arrow-right {
            right: 5px
        }

        .ladi-gallery {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-gallery .ladi-gallery-view {
            position: absolute;
            overflow: hidden;
            touch-action: pan-y
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            height: 100%;
            position: relative;
            display: none;
            transition: transform .5s ease-in-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.play-video {
            cursor: pointer
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.play-video:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            width: 60px;
            height: 60px;
            background: url({{asset('/img/play.svg')}}) no-repeat center center;
            background-size: contain;
            pointer-events: none;
            cursor: pointer
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.next, .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected.right {
            left: 0;
            transform: translate3d(100%, 0, 0)
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.prev, .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected.left {
            left: 0;
            transform: translate3d(-100%, 0, 0)
        }

        .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.next.left, .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.prev.right, .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item.selected {
            left: 0;
            transform: translate3d(0, 0, 0)
        }

        .ladi-gallery .ladi-gallery-view > .next, .ladi-gallery .ladi-gallery-view > .prev, .ladi-gallery .ladi-gallery-view > .selected {
            display: block
        }

        .ladi-gallery .ladi-gallery-view > .selected {
            left: 0
        }

        .ladi-gallery .ladi-gallery-view > .next, .ladi-gallery .ladi-gallery-view > .prev {
            position: absolute;
            top: 0;
            width: 100%
        }

        .ladi-gallery .ladi-gallery-view > .next {
            left: 100%
        }

        .ladi-gallery .ladi-gallery-view > .prev {
            left: -100%
        }

        .ladi-gallery .ladi-gallery-view > .next.left, .ladi-gallery .ladi-gallery-view > .prev.right {
            left: 0
        }

        .ladi-gallery .ladi-gallery-view > .selected.left {
            left: -100%
        }

        .ladi-gallery .ladi-gallery-view > .selected.right {
            left: 100%
        }

        .ladi-gallery .ladi-gallery-control {
            position: absolute;
            overflow: hidden;
            touch-action: pan-y
        }

        .ladi-gallery.ladi-gallery-top .ladi-gallery-view {
            width: 100%
        }

        .ladi-gallery.ladi-gallery-top .ladi-gallery-control {
            top: 0;
            width: 100%
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view {
            top: 0;
            width: 100%
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control {
            width: 100%;
            bottom: 0
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-view {
            height: 100%
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-control {
            height: 100%
        }

        .ladi-gallery.ladi-gallery-right .ladi-gallery-view {
            height: 100%
        }

        .ladi-gallery.ladi-gallery-right .ladi-gallery-control {
            height: 100%;
            right: 0
        }

        .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {
            position: absolute;
            top: calc(50% - (33px) / 2);
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left {
            left: 5px;
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right {
            right: 5px
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
            position: absolute;
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow, .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow {
            top: calc(50% - (33px) / 2)
        }

        .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left {
            left: 0;
            transform: rotate(180deg) scale(.6);
            -webkit-transform: rotate(180deg) scale(.6)
        }

        .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right {
            right: 0;
            transform: scale(.6);
            -webkit-transform: scale(.6)
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left {
            left: 0;
            transform: rotate(180deg) scale(.6);
            -webkit-transform: rotate(180deg) scale(.6)
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right {
            right: 0;
            transform: scale(.6);
            -webkit-transform: scale(.6)
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow, .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow {
            left: calc(50% - (33px) / 2)
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left {
            top: 0;
            transform: scale(.6) rotate(270deg);
            -webkit-transform: scale(.6) rotate(270deg)
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right {
            bottom: 0;
            transform: scale(.6) rotate(90deg);
            -webkit-transform: scale(.6) rotate(90deg)
        }

        .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left {
            top: 0;
            transform: scale(.6) rotate(270deg);
            -webkit-transform: scale(.6) rotate(270deg)
        }

        .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right {
            bottom: 0;
            transform: scale(.6) rotate(90deg);
            -webkit-transform: scale(.6) rotate(90deg)
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box {
            position: relative
        }

        .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box {
            display: -webkit-inline-flex;
            display: inline-flex;
            left: 0;
            transition: left 150ms ease-in-out
        }

        .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box {
            display: -webkit-inline-flex;
            display: inline-flex;
            left: 0;
            transition: left 150ms ease-in-out
        }

        .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box {
            display: inline-grid;
            top: 0;
            transition: top 150ms ease-in-out
        }

        .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box {
            display: inline-grid;
            top: 0;
            transition: top 150ms ease-in-out
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            float: left;
            position: relative;
            cursor: pointer;
            filter: invert(15%)
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            width: 30px;
            height: 30px;
            background: url({{asset('/img/play.svg')}}) no-repeat center center;
            background-size: contain;
            pointer-events: none;
            cursor: pointer
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover {
            filter: none
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected {
            filter: none
        }

        .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child {
            margin-right: 0 !important;
            margin-bottom: 0 !important
        }

        .ladi-table {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: auto
        }

        .ladi-table table {
            width: 100%
        }

        .ladi-table table td {
            vertical-align: middle
        }

        .ladi-table tbody td {
            word-break: break-word
        }

        .ladi-table table td img {
            cursor: pointer;
            width: 100%
        }

        .ladi-box {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .ladi-tabs {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-tabs .ladi-tabs-background {
            height: 100%;
            width: 100%;
            pointer-events: none
        }

        .ladi-tabs > .ladi-element[data-index] {
            display: none
        }

        .ladi-tabs > .ladi-element.selected[data-index] {
            display: block
        }

        .ladi-frame {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .ladi-frame .ladi-frame-background {
            height: 100%;
            width: 100%;
            pointer-events: none;
            transition: inherit
        }

        .ladi-banner {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .ladi-banner .ladi-banner-background {
            height: 100%;
            width: 100%;
            pointer-events: none
        }

        #SECTION_POPUP .ladi-container {
            z-index: 90000070
        }

        #SECTION_POPUP .ladi-container > .ladi-element {
            z-index: 90000070;
            position: fixed;
            display: none
        }

        #SECTION_POPUP .ladi-container > .ladi-element[data-fixed-close=true] {
            position: relative !important
        }

        #SECTION_POPUP .ladi-container > .ladi-element.hide-visibility {
            display: block !important;
            visibility: hidden !important
        }

        #SECTION_POPUP .popup-close {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 9000000080;
            cursor: pointer
        }

        .ladi-popup {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-popup .ladi-popup-background {
            height: 100%;
            width: 100%;
            pointer-events: none
        }

        .ladi-countdown {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-countdown .ladi-countdown-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit;
            display: table;
            pointer-events: none
        }

        .ladi-countdown .ladi-countdown-text {
            position: absolute;
            width: 100%;
            height: 100%;
            text-decoration: inherit;
            display: table;
            pointer-events: none
        }

        .ladi-countdown .ladi-countdown-text span {
            display: table-cell;
            vertical-align: middle
        }

        .ladi-countdown > .ladi-element {
            text-decoration: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit;
            position: relative;
            display: inline-block
        }

        .ladi-countdown > .ladi-element:last-child {
            margin-right: 0 !important
        }

        .ladi-button {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden
        }

        .ladi-button:active {
            transform: translateY(2px);
            transition: transform .2s linear
        }

        .ladi-button .ladi-button-background {
            height: 100%;
            width: 100%;
            pointer-events: none;
            transition: inherit
        }

        .ladi-button > .ladi-element {
            width: 100% !important;
            height: 100% !important;
            top: 0 !important;
            left: 0 !important;
            display: table;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-button > .ladi-element .ladi-headline {
            display: table-cell;
            vertical-align: middle
        }

        .ladi-collection {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-collection.carousel {
            overflow: hidden
        }

        .ladi-collection .ladi-collection-content {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            transition: left 350ms ease-in-out
        }

        .ladi-collection .ladi-collection-content .ladi-collection-item {
            display: block;
            position: relative;
            float: left
        }

        .ladi-collection .ladi-collection-content .ladi-collection-page {
            float: left
        }

        .ladi-collection .ladi-collection-arrow {
            position: absolute;
            top: calc(50% - (33px) / 2);
            cursor: pointer;
            z-index: 90000040
        }

        .ladi-collection .ladi-collection-arrow-left {
            left: 5px;
            transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        .ladi-collection .ladi-collection-arrow-right {
            right: 5px
        }

        .ladi-collection .ladi-collection-button-next {
            position: absolute;
            bottom: -40px;
            right: 0;
            left: 0;
            margin: auto;
            cursor: pointer;
            z-index: 90000040;
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        .ladi-form {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-form > .ladi-element {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form .ladi-button > .ladi-element {
            color: initial;
            font-size: initial;
            font-weight: initial;
            text-transform: initial;
            text-decoration: initial;
            font-style: initial;
            text-align: initial;
            letter-spacing: initial;
            line-height: initial
        }

        .ladi-form > .ladi-element .ladi-form-item-container {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form > [data-quantity=true] .ladi-form-item-container {
            overflow: hidden
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item-background {
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-size: 9px 6px !important;
            background-position: right .5rem center;
            background-repeat: no-repeat
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2 {
            width: calc(100% / 2 - 5px);
            max-width: calc(100% / 2 - 5px);
            min-width: calc(100% / 2 - 5px)
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3) {
            margin-left: 7.5px
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
            width: calc(100% / 3 - 5px);
            max-width: calc(100% / 3 - 5px);
            min-width: calc(100% / 3 - 5px)
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
            margin-left: 7.5px
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
            margin-left: 7.5px
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
            color: initial
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
            text-transform: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
            text-decoration: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit;
            vertical-align: middle
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=true] {
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=false] {
            text-transform: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-form .ladi-form-item-container {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-form .ladi-form-item-title-value {
            font-weight: 700;
            word-break: break-word
        }

        .ladi-form .ladi-form-label-container {
            position: relative;
            width: 100%
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item {
            display: inline-block;
            cursor: pointer;
            position: relative;
            border-radius: 0 !important;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.image {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value {
            display: none !important
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled {
            opacity: .35
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled {
            opacity: .2
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled {
            opacity: .15
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before {
            content: '';
            width: 0;
            height: 0;
            bottom: -1px;
            right: -1px;
            position: absolute;
            border-width: 0 0 15px 15px;
            border-color: transparent;
            border-style: solid
        }

        .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after {
            content: '';
            background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: bottom right;
            width: 7px;
            height: 7px;
            bottom: 0;
            right: 0;
            position: absolute
        }

        .ladi-form .ladi-form-item {
            width: 100%;
            height: 100%;
            position: absolute
        }

        .ladi-form .ladi-form-item-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox {
            height: auto
        }

        .ladi-form .ladi-form-item .ladi-form-control {
            background-color: transparent;
            min-width: 100%;
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            width: 100%;
            height: 100%;
            padding: 0 5px;
            color: inherit;
            font-size: inherit;
            border: none
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox {
            padding: 10px 5px
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
            margin-top: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            display: table;
            border: none
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
            margin-top: 0 !important;
            margin-left: 0 !important;
            margin-right: 10px !important;
            display: inline-block;
            border: none;
            position: relative
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
            vertical-align: middle;
            width: 13px;
            height: 13px;
            display: table-cell;
            margin-right: 5px
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
            display: table-cell;
            cursor: default;
            vertical-align: middle;
            word-break: break-word
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item input {
            position: absolute;
            top: 4px
        }

        .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item span {
            padding-left: 18px
        }

        .ladi-form .ladi-form-item textarea.ladi-form-control {
            resize: none;
            padding: 5px
        }

        .ladi-form .ladi-button {
            cursor: pointer
        }

        .ladi-form .ladi-button .ladi-headline {
            cursor: pointer;
            user-select: none
        }

        .ladi-combobox {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-combobox .ladi-combobox-item-container {
            position: absolute;
            width: 100%;
            height: 100%;
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit
        }

        .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item {
            width: 100%;
            height: 100%;
            position: absolute;
            text-transform: inherit;
            text-decoration: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit
        }

        .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control option {
            color: initial
        }

        .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control {
            background-color: transparent;
            min-width: 100%;
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            width: 100%;
            height: 100%;
            padding: 0 5px;
            font-size: inherit;
            border: none;
            text-transform: inherit;
            text-align: inherit;
            letter-spacing: inherit;
            color: inherit;
            background-size: inherit;
            background-attachment: inherit;
            background-origin: inherit;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-size: 9px 6px !important;
            background-position: right .5rem center;
            background-repeat: no-repeat
        }

        .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control:not([data-selected=""]) {
            text-decoration: inherit
        }

        .ladi-cart {
            position: absolute;
            width: 100%;
            font-size: 12px
        }

        .ladi-cart .ladi-cart-row {
            position: relative;
            display: inline-table;
            width: 100%
        }

        .ladi-cart .ladi-cart-row:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 1px;
            width: 100%;
            background: #dcdcdc
        }

        .ladi-cart .ladi-cart-no-product {
            text-align: center;
            font-size: 16px;
            vertical-align: middle
        }

        .ladi-cart .ladi-cart-image {
            width: 16%;
            vertical-align: middle;
            position: relative;
            text-align: center
        }

        .ladi-cart .ladi-cart-image img {
            max-width: 100%
        }

        .ladi-cart .ladi-cart-title {
            vertical-align: middle;
            padding: 0 5px;
            word-break: break-all
        }

        .ladi-cart .ladi-cart-title .ladi-cart-title-name {
            display: block;
            margin-bottom: 5px;
            word-break: break-word
        }

        .ladi-cart .ladi-cart-title .ladi-cart-title-variant {
            font-weight: 700;
            display: block;
            word-break: break-word
        }

        .ladi-cart .ladi-cart-image .ladi-cart-image-quantity {
            position: absolute;
            top: -3px;
            right: -5px;
            background: rgba(150, 149, 149, .9);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            line-height: 20px
        }

        .ladi-cart .ladi-cart-quantity {
            width: 70px;
            vertical-align: middle;
            text-align: center
        }

        .ladi-cart .ladi-cart-quantity-content {
            display: -webkit-inline-flex;
            display: inline-flex
        }

        .ladi-cart .ladi-cart-quantity input {
            width: 24px;
            text-align: center;
            height: 22px;
            -moz-appearance: textfield;
            border-top: 1px solid #dcdcdc;
            border-bottom: 1px solid #dcdcdc
        }

        .ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button, .ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .ladi-cart .ladi-cart-quantity button {
            border: 1px solid #dcdcdc;
            cursor: pointer;
            text-align: center;
            width: 21px;
            height: 22px;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-cart .ladi-cart-quantity button:active {
            transform: translateY(2px);
            transition: transform .2s linear
        }

        .ladi-cart .ladi-cart-quantity button span {
            font-size: 18px;
            position: relative;
            left: .5px
        }

        .ladi-cart .ladi-cart-quantity button:first-child span {
            top: -1.2px
        }

        .ladi-cart .ladi-cart-price {
            width: 100px;
            vertical-align: middle;
            text-align: right;
            padding: 0 10px 0 5px
        }

        .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span {
            text-decoration: line-through;
            display: block;
            margin-bottom: 3px
        }

        .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span.price-compare {
            text-decoration: none;
            color: #e85d04;
            font-weight: 700;
            margin-bottom: 0
        }

        .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-title span.promotion-name {
            margin-top: 5px;
            display: block;
            word-break: break-word
        }

        .ladi-cart .ladi-cart-action {
            width: 28px;
            vertical-align: middle;
            text-align: center
        }

        .ladi-cart .ladi-cart-action button {
            border: 1px solid #dcdcdc;
            cursor: pointer;
            text-align: center;
            width: 25px;
            height: 22px;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-cart .ladi-cart-action button:active {
            transform: translateY(2px);
            transition: transform .2s linear
        }

        .ladi-cart .ladi-cart-action button span {
            font-size: 13px;
            position: relative;
            top: .5px
        }

        .ladi-video {
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
            overflow: hidden
        }

        .ladi-video .ladi-video-background {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none
        }

        .ladi-group {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-button-group {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-button-group > .ladi-element {
            transition: inherit
        }

        .ladi-button-group > .ladi-element > .ladi-button {
            transition: inherit
        }

        .ladi-shape {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .ladi-html-code {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .ladi-image {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none
        }

        .ladi-image .ladi-image-background {
            background-repeat: no-repeat;
            background-position: left top;
            background-size: cover;
            background-attachment: scroll;
            background-origin: content-box;
            position: absolute;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .ladi-headline {
            width: 100%;
            display: inline-block;
            background-size: cover;
            background-position: center center
        }

        .ladi-headline a {
            text-decoration: underline
        }

        .ladi-paragraph {
            width: 100%;
            display: inline-block
        }

        .ladi-paragraph a {
            text-decoration: underline
        }

        .ladi-list-paragraph {
            width: 100%;
            display: inline-block
        }

        .ladi-list-paragraph a {
            text-decoration: underline
        }

        .ladi-list-paragraph ul li {
            position: relative;
            counter-increment: linum
        }

        .ladi-list-paragraph ul li:before {
            position: absolute;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            left: 0
        }

        .ladi-list-paragraph ul li:last-child {
            padding-bottom: 0 !important
        }

        .ladi-line {
            position: relative
        }

        .ladi-line .ladi-line-container {
            border-bottom: 0 !important;
            border-right: 0 !important;
            width: 100%;
            height: 100%
        }

        a[data-action] {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            cursor: pointer
        }

        a:visited {
            color: inherit
        }

        a:link {
            color: inherit
        }

        .button-unmute {
            cursor: pointer;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto
        }

        .button-unmute div {
            background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            width: 60px;
            height: 60px;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 100%;
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: center center
        }

        [data-opacity="0"] {
            opacity: 0
        }

        [data-hidden=true] {
            display: none
        }

        [data-action=true] {
            cursor: pointer
        }

        .ladi-hidden {
            display: none
        }

        .backdrop-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 90000060
        }

        .lightbox-screen {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            z-index: 9000000080;
            background: rgba(0, 0, 0, .5)
        }

        .lightbox-screen .lightbox-close {
            position: absolute;
            z-index: 9000000090;
            cursor: pointer
        }

        .lightbox-screen .lightbox-hidden {
            display: none
        }

        .ladi-animation-hidden {
            visibility: hidden !important
        }

        .ladi-lazyload {
            background-image: none !important
        }

        .ladi-list-paragraph ul li.ladi-lazyload:before {
            background-image: none !important
        }

        .ladi-cart-number {
            position: absolute;
            top: -2px;
            right: -7px;
            background: #f36e36;
            text-align: center;
            width: 18px;
            height: 18px;
            line-height: 18px;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            border-radius: 100%
        }

        .ladi-form-quantity {
            display: -webkit-inline-flex;
            display: inline-flex;
            border-color: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity .ladi-form-control {
            text-align: center;
            pointer-events: none;
            -moz-appearance: textfield;
            width: calc(100% - 45px);
            padding: 0;
            min-width: 24px;
            border-top: 1px hidden;
            border-bottom: 1px hidden;
            border-color: inherit
        }

        .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-inner-spin-button, .ladi-form > .ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .ladi-form-quantity button {
            border: 1px hidden;
            border-color: inherit;
            cursor: pointer;
            text-align: center;
            width: 30px;
            height: 100%;
            position: relative;
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        .ladi-form-quantity button span {
            font-size: 18px;
            position: relative;
            left: .5px
        }

        .ladi-form-quantity button:first-child span {
            top: -1.2px
        }

        .ladi-form [data-variant=true] select option[disabled] {
            background: #fff;
            color: #b8b8b8 !important
        }

        .ladi-story-page-progress-bar {
            width: 100%;
            height: 25px;
            position: fixed;
            top: 0;
            left: 0
        }

        .ladi-story-page-progress-bar-item {
            height: 100%;
            width: 100%;
            display: block;
            float: left;
            margin: 0 5px;
            position: relative;
            cursor: pointer
        }

        .ladi-story-page-progress-bar-item:before {
            content: '';
            position: absolute;
            background: rgba(255, 255, 255, .4);
            border-radius: 10px;
            width: 100%;
            height: 4px;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0
        }

        .ladi-story-page-progress-bar-item.active:before {
            background: #fff
        }

        .ladi-story-page-progress-bar-item span {
            background: #fff;
            border-radius: 10px;
            height: 4px;
            display: block;
            margin: auto 0;
            top: 0;
            bottom: 0;
            position: absolute;
            transition: width .3s linear;
            width: 0%
        }

        .ladi-carousel .ladi-carousel-arrow, .ladi-collection .ladi-collection-arrow, .ladi-collection .ladi-collection-button-next, .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow, .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow, .ladi-section .ladi-section-arrow-down {
            width: 33px;
            height: 33px;
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
        }

        #SECTION_POPUP .popup-close, .ladi-section .ladi-section-close, .lightbox-screen .lightbox-close {
            width: 18px;
            height: 18px;
            margin: 6px;
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20148.1%20148.1%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M83.4%2C74l54.1-54.1c2.6-2.6%2C2.6-6.8%2C0-9.3c-2.6-2.6-6.8-2.6-9.3%2C0L74%2C64.7L20%2C10.5c-2.6-2.6-6.8-2.6-9.3%2C0c-2.6%2C2.6-2.6%2C6.8%2C0%2C9.3l54%2C54.1l-54.1%2C54.1c-2.6%2C2.6-2.6%2C6.8%2C0%2C9.3c2.6%2C2.6%2C6.8%2C2.6%2C9.3%2C0l54.1-54l54.1%2C54.1c1.3%2C1.3%2C3%2C1.9%2C4.7%2C1.9s3.4-0.6%2C4.7-1.9c1.3-1.3%2C2-3.1%2C2-4.9c0-1.7-0.8-3.4-2-4.6L83.4%2C74z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
        }

        #BODY_BACKGROUND {
            position: fixed;
            pointer-events: none;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            height: 100vh !important
        }

        #POPUP_BLOG .ladi-headline img, #POPUP_BLOG .ladi-paragraph img {
            max-width: 100%
        }

        @media (min-width: 768px) {
            .ladi-fullwidth {
                width: 100vw !important;
                left: calc(-50vw + 50%) !important;
                box-sizing: border-box !important;
                transform: none !important
            }

            .ladi-fullwidth .ladi-gallery-view-item {
                transition-duration: 1.5s
            }
        }

        @media (max-width: 767px) {
            .ladi-element.ladi-auto-scroll {
                overflow-x: scroll;
                overflow-y: hidden;
                width: 100% !important;
                left: 0 !important;
                -webkit-overflow-scrolling: touch
            }

            .ladi-section.ladi-auto-scroll {
                overflow-x: scroll;
                overflow-y: hidden;
                -webkit-overflow-scrolling: touch
            }

            .ladi-carousel .ladi-carousel-content {
                transition: left .3s ease-in-out
            }

            .ladi-gallery .ladi-gallery-view > .ladi-gallery-view-item {
                transition: transform .3s ease-in-out
            }

            #POPUP_BLOG .ladi-headline img, #POPUP_BLOG .ladi-paragraph img {
                height: auto !important
            }
        }

        .ladi-notify-transition {
            transition: top .5s ease-in-out, bottom .5s ease-in-out, opacity .5s ease-in-out
        }

        .ladi-notify {
            padding: 5px;
            box-shadow: 0 0 1px rgba(64, 64, 64, .3), 0 8px 50px rgba(64, 64, 64, .05);
            border-radius: 40px;
            line-height: 1.6;
            width: 100%;
            height: 100%;
            font-size: 13px
        }

        .ladi-notify .ladi-notify-image img {
            float: left;
            margin-right: 13px;
            border-radius: 50%;
            width: 53px;
            height: 53px;
            pointer-events: none
        }

        .ladi-notify .ladi-notify-title {
            font-size: 100%;
            height: 17px;
            overflow: hidden;
            font-weight: 700;
            overflow-wrap: break-word;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 1
        }

        .ladi-notify .ladi-notify-content {
            font-size: 92.308%;
            height: 17px;
            overflow: hidden;
            overflow-wrap: break-word;
            text-overflow: ellipsis;
            white-space: nowrap;
            line-height: 1;
            padding-top: 2px
        }

        .ladi-notify .ladi-notify-time {
            line-height: 1.6;
            font-size: 84.615%;
            display: inline-block;
            overflow-wrap: break-word;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: calc(100% - 155px);
            overflow: hidden
        }

        .ladi-notify .ladi-notify-copyright {
            font-size: 76.9231%;
            margin-left: 2px;
            position: relative;
            padding: 0 5px;
            cursor: pointer;
            opacity: .6;
            display: inline-block;
            top: -4px
        }

        .ladi-notify .ladi-notify-copyright svg {
            vertical-align: middle
        }

        .ladi-notify .ladi-notify-copyright svg:not(:root) {
            overflow: hidden
        }

        .ladi-notify .ladi-notify-copyright div {
            text-decoration: none;
            color: rgba(64, 64, 64, 1);
            display: inline
        }

        .ladi-notify .ladi-notify-copyright strong {
            font-weight: 700
        }

        .builder-container .ladi-notify {
            transition: unset
        }

        .ladi-spin-lucky {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            box-shadow: 0 0 7px 0 rgba(64, 64, 64, .6), 0 8px 50px rgba(64, 64, 64, .3);
            background-repeat: no-repeat;
            background-size: cover
        }

        .ladi-spin-lucky .ladi-spin-lucky-start {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            width: 20%;
            height: 20%;
            cursor: pointer;
            background-size: contain;
            background-position: center center;
            background-repeat: no-repeat;
            transition: transform .3s ease-in-out;
            -webkit-transition: transform .3s ease-in-out
        }

        .ladi-spin-lucky .ladi-spin-lucky-start:hover {
            transform: scale(1.1)
        }

        .ladi-spin-lucky .ladi-spin-lucky-screen {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            transition: transform 7s cubic-bezier(.25, .1, 0, 1);
            -webkit-transition: transform 7s cubic-bezier(.25, .1, 0, 1);
            text-decoration-line: inherit;
            -webkit-text-decoration-line: inherit;
            text-transform: inherit
        }

        .ladi-spin-lucky .ladi-spin-lucky-screen:before {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none
        }

        .ladi-spin-lucky .ladi-spin-lucky-label {
            position: absolute;
            top: 50%;
            left: 50%;
            overflow: hidden;
            width: 42%;
            padding-left: 12%;
            transform-origin: 0 0;
            -webkit-transform-origin: 0 0;
            text-decoration-line: inherit;
            -webkit-text-decoration-line: inherit;
            text-transform: inherit;
            line-height: 1.6;
            text-shadow: rgba(0, 0, 0, .5) 1px 0 2px
        }</style>
    <style id="style_page" type="text/css">@media (min-width: 768px) {
            .ladi-section .ladi-container {
                width: 1200px;
            }
        }

        @media (max-width: 767px) {
            .ladi-section .ladi-container {
                width: 420px;
            }
        }

        @font-face {
            font-family: "SVN-Janelotus.otf";
            src: url({{asset('/font/svn-janelotus-20220112205002.otf')}})
        }

        @font-face {
            font-family: "ITCEDSCR.TTF";
            src: url({{asset('/font/itcedscr-20220221154636.ttf')}}) format("truetype");
        }

        body {
            font-family: Montserrat, sans-serif
        }</style>
    <style id="style_element" type="text/css">@media (min-width: 768px) {
            #SECTION_POPUP {
                height: 0px;
            }

            #SECTION_POPUP .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION14 {
                height: 1264.2px;
            }

            #SECTION14 > .ladi-section-background {
                background-color: rgb(0, 37, 95);
            }

            #SECTION14 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #tongquan {
                height: 563px;
            }

            #tongquan > .ladi-section-background {
                background-color: rgb(0, 37, 95);
            }

            #tongquan .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #POPUP507 {
                width: 457.276px;
                height: 421px;
                top: 0px;
                left: 0px;
                bottom: 0px;
                right: 0px;
                margin: auto;
                border-radius: 25px;
            }

            #POPUP507 > .ladi-popup > .ladi-overlay {
                border-radius: 25px;
            }

            #POPUP507 > .ladi-popup > .ladi-popup-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(65deg, #d40e6d, #f8a815);
                background: linear-gradient(65deg, #d40e6d, #f8a815);
                border-radius: 25px;
            }

            #POPUP507 > .ladi-popup {
                box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
                -webkit-box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
            }

            #POPUP507.ladi-animation > .ladi-popup {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-duration: 0.5s;
                -webkit-animation-duration: 0.5s;
            }

            #IMAGE509 {
                width: 446.276px;
                height: 410.835px;
                top: 0px;
                left: 0px;
            }

            #IMAGE509 > .ladi-image > .ladi-overlay {
                background-color: rgb(0, 37, 95);
            }

            #IMAGE509 > .ladi-image > .ladi-image-background {
                width: 552.276px;
                height: 430.215px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/anh5.jpg') }});
            }

            #IMAGE509 > .ladi-image {
                border-radius: 32px;
            }

            #BUTTON_TEXT511 {
                width: 374px;
                top: 9.64797px;
                left: 0px;
            }

            #BUTTON_TEXT511 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #BUTTON511 {
                width: 373.91px;
                height: 51.4559px;
                top: 118.691px;
                left: 0px;
            }

            #BUTTON511 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(199deg, #FFED00, #FF0000);
                background: linear-gradient(199deg, #FFED00, #FF0000);
            }

            #BUTTON511 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 3px;
            }

            #FORM_ITEM513 {
                width: 373.91px;
                height: 42.8799px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM515 {
                width: 373.91px;
                height: 42.8799px;
                top: 59.3094px;
                left: 0px;
            }

            #FORM510 {
                width: 373.91px;
                height: 170.147px;
                top: 166.758px;
                left: 36.183px;
            }

            #FORM510 > .ladi-form {
                color: rgb(115, 70, 70);
                font-size: 14px;
                line-height: 1.6;
            }

            #FORM510 .ladi-form-item .ladi-form-control::placeholder, #FORM510 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: rgba(115, 70, 70, 1.0);
            }

            #FORM510 .ladi-form-item {
                padding-left: 8px;
                padding-right: 8px;
            }

            #FORM510 .ladi-form-item.ladi-form-checkbox {
                padding-left: 13px;
                padding-right: 13px;
            }

            #FORM510 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(115%2C%2070%2C%2070%2C%201.0)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM510 .ladi-form-item-container, #FORM510 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(238, 238, 238);
                border-width: 1px;
                border-radius: 3px;
            }

            #FORM510 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(238, 238, 238);
            }

            #FORM510 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
                border-radius: 2px
            }

            #HEADLINE516 {
                width: 345px;
                top: 62.25px;
                left: 52.004px;
            }

            #HEADLINE516 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 31px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE516 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE517 {
                width: 303px;
                top: 105.25px;
                left: 71.138px;
            }

            #HEADLINE517 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP508 {
                width: 446.276px;
                height: 410.835px;
                top: 4.095px;
                left: 6px;
            }

            #GROUP508.ladi-animation > .ladi-group {
                animation-name: fadeIn;
                -webkit-animation-name: fadeIn;
                animation-delay: 0s;
                -webkit-animation-delay: 0s;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #CAROUSEL520 {
                width: 1920px;
                height: 894.299px;
                top: -1px;
                left: -363px;
            }

            #CAROUSEL520 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE521 {
                width: 1920px;
                height: 942.191px;
                top: 3px;
                left: 0px;
            }

            #IMAGE521 > .ladi-image > .ladi-image-background {
                width: 1923px;
                height: 942.191px;
                top: 0px;
                left: 0px;
                background-image: url("{{asset('img/anhbia0.jpg')}}");
            }

            #IMAGE531 {
                width: 790.89px;
                height: 395.445px;
                top: 675.326px;
                left: 1050.5px;
                mix-blend-mode: screen;
                will-change: transform, opacity;
            }

            #IMAGE531 > .ladi-image > .ladi-image-background {
                width: 790.89px;
                height: 395.445px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh6.png')}});
            }

            #BOX532 {
                width: 1200px;
                height: 199px;
                top: 1013.2px;
                left: 0px;
            }

            #BOX532 > .ladi-box {
                background-color: rgb(255, 255, 255);
                border-radius: 12px;
                filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px 15px 13px);
            }

            #HEADLINE572 {
                width: 418px;
                top: 30px;
                left: 249px;
            }

            #HEADLINE572 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 19px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE572.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH573 {
                width: 231px;
                top: 3px;
                left: 0px;
            }

            #LIST_PARAGRAPH573 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH573 ul li {
                padding-left: 36px;
            }

            #LIST_PARAGRAPH573 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%209%2C%209%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -7px;
            }

            #LIST_PARAGRAPH574 {
                width: 241px;
                top: 3px;
                left: 239.781px;
            }

            #LIST_PARAGRAPH574 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH574 ul li {
                padding-left: 35px;
            }

            #LIST_PARAGRAPH574 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%208%2C%208%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -10px;
            }

            #LIST_PARAGRAPH575 {
                width: 277px;
                top: 0px;
                left: 519.781px;
            }

            #LIST_PARAGRAPH575 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH575 ul li {
                padding-left: 36px;
            }

            #LIST_PARAGRAPH575 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%208%2C%208%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -8px;
            }

            #BUTTON576 {
                width: 307.782px;
                height: 50px;
                top: 8px;
                left: 819.782px;
            }

            #BUTTON576 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(204deg, #FFED00, #FF0000);
                background: linear-gradient(204deg, #FFED00, #FF0000);
            }

            #BUTTON576 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 10px;
            }

            #BUTTON_TEXT576 {
                width: 322px;
                top: 9px;
                left: 0px;
            }

            #BUTTON_TEXT576 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 17px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP577 {
                width: 796.781px;
                height: 71px;
                top: 0px;
                left: 0px;
            }

            #GROUP578 {
                width: 1127.56px;
                height: 71px;
                top: 1112.7px;
                left: 36.218px;
            }

            #GROUP578.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.5s;
                -webkit-animation-duration: 2.5s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1397 {
                width: 969px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1397 > .ladi-headline {
                background: #f8a815;
                background: -webkit-linear-gradient(211deg, #f8a815, #d40e6d);
                background: linear-gradient(211deg, #f8a815, #d40e6d);
                color: rgb(175, 22, 90);
                font-size: 23px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1397.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1397 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP1414 {
                width: 969px;
                height: 60px;
                top: 0px;
                left: 0px;
            }

            #LINE1416 {
                width: 173px;
                top: 34px;
                left: 105.501px;
            }

            #LINE1416 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(212, 14, 110);
                border-right: 2px solid rgb(212, 14, 110);
                border-bottom: 2px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1416 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1418 {
                width: 969px;
                height: 60px;
                top: 0px;
                left: 0px;
            }

            #GROUP1418.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1420 {
                height: 763.2px;
            }

            #SECTION1420.ladi-animation {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.8s;
                -webkit-animation-duration: 2.8s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1420 > .ladi-section-background {
                background-size: cover;
                background-attachment: fixed;
                background-image: url("{{ asset('/img/anh4.jpg') }}");
                background-position: center center;
                background-repeat: repeat;
            }

            #SECTION1420 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1426 {
                width: 1929px;
                height: 170.5px;
                top: 0px;
                left: -358px;
            }

            #BOX1426 > .ladi-box {
                opacity: 0.92;
                background-color: rgb(255, 255, 255);
            }

            #SECTION1457 {
                height: 2280.65px;
            }

            #SECTION1457 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1504 {
                width: 3932.16px;
                height: 368.027px;
                top: 61.846px;
                left: -716.97px;
            }

            #BOX1504 > .ladi-box > .ladi-overlay {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{asset('/img/anh7.jpg')}});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.17;
            }

            #BOX1504 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 10px;
            }

            #BOX1505 {
                width: 411px;
                height: 448px;
                top: 17.8595px;
                left: 722.5px;
            }

            #BOX1505 > .ladi-box {
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #FORM1506 {
                width: 350px;
                height: 186px;
                top: 201.415px;
                left: 750.5px;
            }

            #FORM1506 > .ladi-form {
                color: rgb(0, 0, 0);
                font-size: 14px;
                letter-spacing: 0px;
                line-height: 1.6;
            }

            #FORM1506 .ladi-form-item .ladi-form-control::placeholder, #FORM1506 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: #000;
            }

            #FORM1506 .ladi-form-item {
                padding-left: 11px;
                padding-right: 11px;
            }

            #FORM1506 .ladi-form-item.ladi-form-checkbox {
                padding-left: 16px;
                padding-right: 16px;
            }

            #FORM1506 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20%23000%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM1506 .ladi-form-item-container, #FORM1506 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(162, 162, 162);
                border-width: 1px;
            }

            #FORM1506 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(162, 162, 162);
            }

            #FORM1506 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
            }

            #BUTTON1507 {
                width: 350px;
                height: 51.8156px;
                top: 134.184px;
                left: 0px;
            }

            #BUTTON1507 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(200deg, #FFED00, #FF0000);
                background: linear-gradient(200deg, #FFED00, #FF0000);
            }

            #BUTTON1507 > .ladi-button {
                box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                -webkit-box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                border-radius: 3px;
            }

            #BUTTON_TEXT1507 {
                width: 350px;
                top: 13.324px;
                left: 0px;
            }

            #BUTTON_TEXT1507 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #FORM_ITEM1509 {
                width: 350px;
                height: 51.8156px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM1510 {
                width: 350px;
                height: 51.8156px;
                top: 67.092px;
                left: 0px;
            }

            #GROUP1511 {
                width: 394px;
                height: 99px;
                top: 81.845px;
                left: 728.5px;
            }

            #HEADLINE1512 {
                width: 349px;
                top: 36px;
                left: 28px;
            }

            #HEADLINE1512 > .ladi-headline {
                color: rgb(32, 32, 32);
                font-size: 15px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1513 {
                width: 394px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1513 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(123deg, #d40e6d, #f8a815);
                background: linear-gradient(123deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 26px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1513 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1515 {
                width: 642px;
                top: 90px;
                left: 0px;
            }

            #HEADLINE1515 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE1515.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1516 {
                width: 606px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1516 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 18px;
                font-weight: bold;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE1516.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1522 {
                height: 511.325px;
            }

            #SECTION1522 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1522 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1561 {
                width: 207.812px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX1561 > .ladi-box {
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(212, 14, 110);
                border-width: 3px;
                border-radius: 7px;
            }

            #HEADLINE1562 {
                width: 175px;
                top: 26.227px;
                left: 16.3745px;
            }

            #HEADLINE1562 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1563 {
                width: 207.812px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #GROUP1563.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1185 {
                width: 936px;
                height: 69px;
                top: 0px;
                left: 0px;
            }

            #GROUP1185.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE812 {
                width: 936px;
                top: 43px;
                left: 0px;
            }

            #HEADLINE812 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE810 {
                width: 599px;
                top: 0px;
                left: 122px;
            }

            #HEADLINE810 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 36px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.2;
            }

            #HEADLINE810 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #SECTION785 {
                height: 1115.63px;
            }

            #SECTION785 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION785 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1699 {
                width: 207.812px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX1699 > .ladi-box {
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                background-color: rgb(255, 255, 255);
                border-radius: 7px;
            }

            #HEADLINE1700 {
                width: 172px;
                top: 36.727px;
                left: 17.906px;
            }

            #HEADLINE1700 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1698 {
                width: 207.812px;
                height: 136.454px;
                top: 0px;
                left: 227.183px;
            }

            #GROUP1698.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX1702 {
                width: 225.218px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX1702 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(118deg, #d40e6d, #f8a815);
                background: linear-gradient(118deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #HEADLINE1703 {
                width: 199px;
                top: 25.227px;
                left: 13.406px;
            }

            #HEADLINE1703 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1701 {
                width: 225.218px;
                height: 136.454px;
                top: 0px;
                left: 451.694px;
            }

            #GROUP1701.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE1708 {
                width: 389px;
                top: 65px;
                left: 212.376px;
            }

            #LINE1708 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE1708 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1709 {
                width: 936px;
                height: 83px;
                top: 35.24px;
                left: 148px;
            }

            #GROUP1709.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1715 {
                width: 676.912px;
                height: 136.454px;
                top: 234.772px;
                left: 8.501px;
            }

            #IMAGE1803 {
                width: 593.76px;
                height: 359.402px;
                top: 0px;
                left: -715px;
                display: none !important;
            }

            #IMAGE1803 > .ladi-image > .ladi-image-background {
                width: 631.76px;
                height: 359.402px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/anh4.jpg') }});
            }

            #BOX1804 {
                width: 2398px;
                height: 432.85px;
                top: 728.35px;
                left: -740px;
            }

            #BOX1804 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(72px);
            }

            #IMAGE1805 {
                width: 982.89px;
                height: 491.445px;
                top: 610.326px;
                left: -761px;
                mix-blend-mode: screen;
                will-change: transform, opacity;
            }

            #IMAGE1805 > .ladi-image > .ladi-image-background {
                width: 982.89px;
                height: 491.445px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh6.png')}});
            }

            #HEADLINE1807 {
                width: 626px;
                top: 0px;
                left: 314.22px;
            }

            #HEADLINE1807 > .ladi-headline {
                font-family: "SVN-Janelotus.otf";
                color: rgb(238, 202, 102);
                font-size: 92px;
                line-height: 1.6;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
            }

            #HEADLINE1809 {
                width: 303px;
                top: 59px;
                left: 0px;
            }

            #HEADLINE1809 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 19px;
                text-transform: uppercase;
                text-align: right;
                letter-spacing: 1px;
                line-height: 1.6;
            }

            #HEADLINE1810 {
                width: 975px;
                top: 147.549px;
                left: 130.5px;
            }

            #HEADLINE1810 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 47px;
                line-height: 1.6;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE1810.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1811 {
                width: 622px;
                top: 6.8855px;
                left: 5.18211px;
            }

            #HEADLINE1811 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 0px;
                line-height: 1.8;
            }

            #BOX1812 {
                width: 631px;
                height: 38.771px;
                top: 0px;
                left: 0px;
            }

            #BOX1812 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(148deg, #d40e6d, #f8a815);
                background: linear-gradient(148deg, #d40e6d, #f8a815);
                border-radius: 267px;
            }

            #GROUP1813 {
                width: 631px;
                height: 38.771px;
                top: 215.549px;
                left: 260.11px;
            }

            #GROUP1813.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1814 {
                width: 164px;
                top: 0px;
                left: 1px;
            }

            #HEADLINE1814 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1815 {
                width: 215px;
                top: 31px;
                left: 0px;
            }

            #HEADLINE1815 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(228deg, #d40e6d, #f8a815);
                background: linear-gradient(228deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 40px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1815 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1820 {
                width: 199px;
                top: 0px;
                left: 3px;
            }

            #HEADLINE1820 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #HEADLINE1822 {
                width: 204px;
                top: 7px;
                left: 0px;
            }

            #HEADLINE1822 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(245deg, #d40e6d, #f8a815);
                background: linear-gradient(245deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 50px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1822 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1823 {
                width: 199px;
                top: 74px;
                left: 2px;
            }

            #HEADLINE1823 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 13px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1825 {
                width: 156px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1825 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1826 {
                width: 225px;
                top: 21px;
                left: 0px;
            }

            #HEADLINE1826 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(237deg, #d40e6d, #f8a815);
                background: linear-gradient(237deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 24px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1826 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1828 {
                width: 120px;
                top: 59px;
                left: 0px;
            }

            #HEADLINE1828 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1829 {
                width: 133px;
                top: 2px;
                left: 0px;
            }

            #HEADLINE1829 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1830 {
                width: 143px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1830 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(230deg, #d40e6d, #f8a815);
                background: linear-gradient(230deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 62px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1830 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1831 {
                width: 113px;
                top: 76px;
                left: 2px;
            }

            #HEADLINE1831 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 13px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1832 {
                width: 165px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1832 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1833 {
                width: 105px;
                top: 3px;
                left: 0px;
            }

            #HEADLINE1833 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(303deg, #d40e6d, #f8a815);
                background: linear-gradient(303deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 54px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1833 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1834 {
                width: 183px;
                top: 70px;
                left: 0px;
            }

            #HEADLINE1834 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1835 {
                width: 165px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1835 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1836 {
                width: 237px;
                top: 21px;
                left: 0px;
            }

            #HEADLINE1836 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(220deg, #d40e6d, #f8a815);
                background: linear-gradient(220deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 32px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1836 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1838 {
                width: 165px;
                top: 72px;
                left: 0px;
            }

            #HEADLINE1838 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #GROUP1839 {
                width: 215px;
                height: 95px;
                top: 2px;
                left: 916px;
            }

            #GROUP1839.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1840 {
                width: 204px;
                height: 95px;
                top: 1px;
                left: 1163px;
            }

            #GROUP1840.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.5s;
                -webkit-animation-duration: 2.5s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1841 {
                width: 225px;
                height: 81px;
                top: 4.25px;
                left: 416px;
            }

            #GROUP1841.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1842 {
                width: 143px;
                height: 118px;
                top: 0px;
                left: 0px;
            }

            #GROUP1842.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1843 {
                width: 183px;
                height: 115px;
                top: 1.25px;
                left: 193.52px;
            }

            #GROUP1843.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1844 {
                width: 237px;
                height: 93px;
                top: 0.25px;
                left: 687.52px;
            }

            #GROUP1844.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE1846 {
                height: 115px;
                top: 5.5px;
                left: 0px;
            }

            #LINE1846 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1846 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1847 {
                height: 115px;
                top: 0px;
                left: 249px;
            }

            #LINE1847 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1847 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1848 {
                height: 115px;
                top: 0px;
                left: 496px;
            }

            #LINE1848 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1848 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1849 {
                height: 115px;
                top: 0px;
                left: 747px;
            }

            #LINE1849 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1849 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1850 {
                height: 115px;
                top: 0px;
                left: 988px;
            }

            #LINE1850 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1850 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #CAROUSEL1853 {
                width: 1530px;
                height: 158px;
                top: 838.771px;
                left: -146px;
            }

            #CAROUSEL1853 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #PARAGRAPH1861 {
                width: 631px;
                top: 25.5px;
                left: 640.703px;
            }

            #PARAGRAPH1861 > .ladi-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #PARAGRAPH1861.ladi-animation > .ladi-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1872 {
                width: 615px;
                top: 26px;
                left: 0px;
            }

            #HEADLINE1872 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(87deg, #d40e6d, #f8a815);
                background: linear-gradient(87deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 28px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #HEADLINE1872 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1873 {
                width: 539px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1873 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 16px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #LINE1874 {
                width: 401px;
                top: 99px;
                left: 0px;
            }

            #LINE1874 > .ladi-line > .ladi-line-container {
                border-top: 3px solid rgb(212, 14, 110);
                border-right: 3px solid rgb(212, 14, 110);
                border-bottom: 3px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1874 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #BOX1875 {
                width: 1200px;
                height: 688px;
                top: 0px;
                left: 0px;
            }

            #BOX1875 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(290deg, #d40e6d, #f8a815);
                background: linear-gradient(290deg, #d40e6d, #f8a815);
                box-shadow: 0px 18px 31px -9px rgba(0, 0, 0, 0.7);
                -webkit-box-shadow: 0px 18px 31px -9px rgba(0, 0, 0, 0.7);
                border-radius: 7px;
            }

            #VIDEO1876 {
                width: 1173.33px;
                height: 660px;
                top: 13px;
                left: 14px;
            }

            #VIDEO1876 > .ladi-video > .ladi-video-background {
                background-size: cover;
                background-attachment: scroll;
                background-origin: content-box;
                background-image: url({{asset('img/ee83f6ced6151a4b4304-20220220193729.jpg')}});
                background-position: center center;
                background-repeat: no-repeat;
            }

            #SHAPE1876 {
                width: 60px;
                height: 60px;
                top: 300px;
                left: 556.665px;
            }

            #SHAPE1876 svg:last-child {
                fill: rgba(0, 0, 0, 0.5);
            }

            #GROUP1877 {
                width: 1200px;
                height: 688px;
                top: -371.148px;
                left: 0px;
            }

            #GROUP1877.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1880 {
                width: 448.86px;
                height: 341.4px;
                top: 400.5px;
                left: -282.263px;
            }

            #IMAGE1880 > .ladi-image > .ladi-image-background {
                width: 455.342px;
                height: 341.4px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/1zCegEZRFQzGMlkZPYphFe-Afxdh_kkyRaKPZsUKI.png')}});
            }

            #IMAGE1880 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1880.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1880:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE1881 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 29.468px;
            }

            #IMAGE1881 > .ladi-image > .ladi-image-background {
                width: 1042.77px;
                height: 542.4px;
                top: 0px;
                left: -136px;
                background-image: url({{asset('img/1CGIQHq7RcQusv25_bpq-Iis1LnA1D4YD_6Sv82qh.png')}});
            }

            #IMAGE1881 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE1881.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1881:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #SECTION1878 {
                height: 860.84px;
            }

            #SECTION1878 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1878 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE1898 {
                width: 448.86px;
                height: 341.4px;
                top: 400.5px;
                left: 1027.74px;
            }

            #IMAGE1898 > .ladi-image > .ladi-image-background {
                width: 607.213px;
                height: 341.4px;
                top: 0px;
                left: -51px;
                background-image: url({{asset('img/1exnoD7cAmfq_5c9zWm8T9Ip0mSoNAFNMZmi8dww6.png')}});
            }

            #IMAGE1898.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1898:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #CAROUSEL1900 {
                width: 834px;
                height: 565px;
                top: 268.2px;
                left: 177px;
            }

            #CAROUSEL1900 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION1906 {
                height: 1948px;
            }

            #SECTION1906 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1906 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #HEADLINE1938 {
                width: 294px;
                top: 0px;
                left: 1053px;
            }

            #HEADLINE1938 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(97deg, #d40e6d, #f8a815);
                background: linear-gradient(97deg, #d40e6d, #f8a815);
                color: rgba(0, 0, 0, 0.4);
                font-size: 229px;
                line-height: 1.6;
            }

            #HEADLINE1938 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP1939 {
                width: 1061px;
                height: 17px;
                top: 150.65px;
                left: 74px;
            }

            #BOX1940 {
                width: 5px;
                height: 5px;
                top: 6.5px;
                left: 1056px;
            }

            #BOX1940 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE1941 {
                width: 1061px;
                top: 0px;
                left: 0px;
            }

            #LINE1941 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1941 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #HEADLINE1943 {
                width: 1084px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1943 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(156deg, #d40e6d, #f8a815);
                background: linear-gradient(156deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 27px;
                text-transform: uppercase;
                text-align: right;
                line-height: 1.6;
            }

            #HEADLINE1943 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH1944 {
                width: 396px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH1944 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1944.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1944 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1944 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE1968 {
                width: 261px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1968 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(93deg, #d40e6d, #f8a815);
                background: linear-gradient(93deg, #d40e6d, #f8a815);
                color: rgba(1, 38, 95, 0.6);
                font-size: 229px;
                line-height: 1.6;
            }

            #HEADLINE1968 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #BOX1970 {
                width: 7.7321px;
                height: 5px;
                top: 6.5px;
                left: 0px;
            }

            #BOX1970 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE1971 {
                width: 1166px;
                top: 0px;
                left: 0px;
            }

            #LINE1971 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1971 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1969 {
                width: 1166px;
                height: 17px;
                top: 141.5px;
                left: 69px;
            }

            #HEADLINE1973 {
                width: 733px;
                top: 95.5px;
                left: 254px;
            }

            #HEADLINE1973 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(141deg, #d40e6d, #f8a815);
                background: linear-gradient(141deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 34px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1973 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH1976 {
                width: 464px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH1976 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1976 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1976 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1977 {
                width: 453px;
                top: 21.5px;
                left: 0px;
            }

            #LIST_PARAGRAPH1977 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1977.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1977 ul li {
                padding-bottom: 2px;
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1977 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1980 {
                width: 434px;
                top: 0px;
                left: 498.5px;
            }

            #LIST_PARAGRAPH1980 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1980.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1980 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1980 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1981 {
                width: 488px;
                top: 0.5px;
                left: 495px;
            }

            #LIST_PARAGRAPH1981 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1981 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1981 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE1985 {
                width: 654px;
                height: 452.836px;
                top: 10.914px;
                left: 52px;
            }

            #IMAGE1985 > .ladi-image > .ladi-image-background {
                width: 654px;
                height: 452.836px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anhbia-20220221115723.jpg')}});
            }

            #IMAGE1985 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1985.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1986 {
                width: 647px;
                height: 452.336px;
                top: 9.25px;
                left: 799px;
            }

            #IMAGE1986 > .ladi-image > .ladi-image-background {
                width: 647px;
                height: 452.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/san-bay-phan-thiet-hon-10-20210425154826.jpg')}});
            }

            #IMAGE1986 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1986.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE1992 {
                width: 484px;
                height: 76px;
                top: 0px;
                left: 0px;
            }

            #SHAPE1992 svg:last-child {
                fill: url("#SHAPE1992_desktop_gradient");
            }

            #PARAGRAPH1995 {
                width: 383px;
                top: 13.4176px;
                left: 50.5px;
            }

            #PARAGRAPH1995 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 17px;
                line-height: 1.6;
            }

            #GROUP1996 {
                width: 484px;
                height: 53.8353px;
                top: 38.582px;
                left: 137px;
            }

            #CAROUSEL2006 {
                width: 1501px;
                height: 483.85px;
                top: 1764.65px;
                left: -149px;
            }

            #CAROUSEL2006 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2029 {
                width: 1200px;
                height: 731.5px;
                top: 1133.4px;
                left: 1.5px;
            }

            #BOX2029 > .ladi-box {
                background-color: rgba(1, 38, 95, 0);
                border-style: solid;
                border-color: rgba(1, 38, 95, 0.4);
                border-width: 3px;
                border-radius: 21px;
            }

            #LIST_PARAGRAPH2031 {
                width: 1019px;
                top: 50px;
                left: 0px;
            }

            #LIST_PARAGRAPH2031 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2031 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2031 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #PARAGRAPH2032 {
                width: 969px;
                top: 0px;
                left: 6px;
            }

            #PARAGRAPH2032 > .ladi-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.4;
            }

            #PARAGRAPH2032.ladi-animation > .ladi-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2033 {
                width: 379px;
                top: 0.5px;
                left: 400px;
            }

            #LIST_PARAGRAPH2033 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2033.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2033 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2033 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2034 {
                width: 248px;
                top: 0px;
                left: 760px;
            }

            #LIST_PARAGRAPH2034 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2034.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2034 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2034 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2057 {
                width: 664.211px;
                height: 480.008px;
                top: 10.914px;
                left: 44px;
            }

            #IMAGE2057 > .ladi-image > .ladi-image-background {
                width: 853.014px;
                height: 480.008px;
                top: 0px;
                left: -156px;
                background-image: url({{asset('img/f0f2ff2cd1f71da944e6-20220221120313.jpg')}});
            }

            #IMAGE2057 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2062 {
                width: 664.211px;
                height: 480.008px;
                top: 10.914px;
                left: 790px;
            }

            #IMAGE2062 > .ladi-image > .ladi-image-background {
                width: 976.699px;
                height: 548.172px;
                top: 0px;
                left: -33.5019px;
                background-image: url({{asset('img/100529baoxaydung_image001-20210425161532.jpg')}});
            }

            #IMAGE2062 > .ladi-image {
                border-radius: 5px;
            }

            #CAROUSEL2054 {
                width: 1502px;
                height: 1017px;
                top: 312px;
                left: -161px;
            }

            #CAROUSEL2054 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2087 {
                width: 1737px;
                height: 567px;
                top: 1356.35px;
                left: -107px;
            }

            #BOX2087 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #LIST_PARAGRAPH2092 {
                width: 440px;
                top: 33.85px;
                left: 0px;
            }

            #LIST_PARAGRAPH2092 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2092 ul li {
                padding-bottom: 3px;
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2092 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(249%2C%20187%2C%200%2C%201)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #BOX2094 {
                width: 1200px;
                height: 430px;
                top: 1417.6px;
                left: 0px;
            }

            #BOX2094 > .ladi-box {
                background-color: rgba(255, 255, 255, 0);
                border-style: solid;
                border-color: rgb(255, 255, 255);
                border-width: 3px;
                border-radius: 25px;
            }

            #HEADLINE2101 {
                width: 326px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2101 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgba(0, 0, 0, 0.4);
                font-size: 223px;
                line-height: 1.6;
            }

            #HEADLINE2101 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #BOX2103 {
                width: 7.7321px;
                height: 5px;
                top: 6.5px;
                left: 0px;
            }

            #BOX2103 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE2104 {
                width: 1200px;
                top: 0px;
                left: 0px;
            }

            #LINE2104 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE2104 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2102 {
                width: 1200px;
                height: 17px;
                top: 153px;
                left: 79px;
            }

            #HEADLINE2105 {
                width: 985px;
                top: 120px;
                left: 285.5px;
            }

            #HEADLINE2105 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(146deg, #d40e6d, #f8a815);
                background: linear-gradient(146deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 24px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #HEADLINE2105 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2108 {
                width: 958px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2108 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2108 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2108 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2116 {
                width: 1431.78px;
                height: 734.336px;
                top: 20px;
                left: 52px;
            }

            #IMAGE2116 > .ladi-image > .ladi-image-background {
                width: 1431.78px;
                height: 805.001px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh8.png')}});
            }

            #IMAGE2116 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 8px;
            }

            #IMAGE2116:hover > .ladi-image {
                transform: scale(1.05);
                -webkit-transform: scale(1.05);
            }

            #CAROUSEL2113 {
                width: 1530px;
                height: 766px;
                top: 186.325px;
                left: -167px;
            }

            #CAROUSEL2113 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION2095 {
                height: 974.65px;
            }

            #SECTION2095 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION2176 {
                height: 622.2px;
            }

            #SECTION2176 > .ladi-section-background {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{asset('img/anh5.jpg')}});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.92;
            }

            #SECTION2176 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2177 {
                width: 472px;
                height: 336.022px;
                top: 0px;
                left: -167px;
                display: none !important;
            }

            #BOX2177 > .ladi-box {
                background-color: rgba(255, 255, 255, 0.8);
                filter: blur(24px);
            }

            #IMAGE2178 {
                width: 425.497px;
                height: 374.336px;
                top: -9.086px;
                left: -373px;
                display: none !important;
            }

            #IMAGE2178 > .ladi-image > .ladi-image-background {
                width: 425.497px;
                height: 374.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/e167158b3750fb0ea241-20220221122757.jpg')}});
            }

            #IMAGE2178 > .ladi-image {
                border-radius: 2px;
            }

            #IMAGE2178.ladi-animation > .ladi-image {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2179 {
                width: 1311px;
                height: 304.51px;
                top: 7.69521px;
                left: 8px;
            }

            #BOX2179 > .ladi-box {
                background-color: rgb(255, 255, 255);
                border-radius: 20px;
            }

            #HEADLINE2182 {
                width: 1093px;
                top: 192.627px;
                left: 51.5px;
            }

            #HEADLINE2182 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(471deg, #d40e6d, #f8a815);
                background: linear-gradient(471deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 30px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 0px;
                line-height: 1.2;
            }

            #HEADLINE2182.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2182 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2183 {
                width: 1243.5px;
                height: 170.5px;
                top: 295.127px;
                left: -8px;
            }

            #GROUP2183.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2184 {
                width: 456px;
                top: 2.5px;
                left: 0px;
            }

            #LIST_PARAGRAPH2184 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2184.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2184 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2184 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 37px;
                top: -20px;
            }

            #LIST_PARAGRAPH2185 {
                width: 342px;
                top: 0px;
                left: 477px;
            }

            #LIST_PARAGRAPH2185 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2185.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2185 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2185 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 40px;
                top: -20px;
            }

            #LIST_PARAGRAPH2186 {
                width: 419px;
                top: 5px;
                left: 824.5px;
            }

            #LIST_PARAGRAPH2186 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2186.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2186 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2186 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 40px;
                top: -20px;
            }

            #BOX2213 {
                width: 1928px;
                height: 321.843px;
                top: -0.0005px;
                left: -361px;
            }

            #BOX2213 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #SECTION2243 {
                height: 260.6px;
            }

            #SECTION2243 > .ladi-overlay {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2243 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2243 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #GROUP2266 {
                width: 478px;
                height: 136.221px;
                top: 51.6896px;
                left: 606.352px;
            }

            #HEADLINE2267 {
                width: 445px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2267 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(118deg, #d40e6d, #f8a815);
                background: linear-gradient(118deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 37px;
                font-weight: bold;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE2267 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2268 {
                width: 325px;
                height: 22.5469px;
                top: 84.786px;
                left: 3px;
            }

            #SHAPE2269 {
                width: 22.5469px;
                height: 22.5469px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2269 svg:last-child {
                fill: #d40e6d;
            }

            #HEADLINE2270 {
                width: 292px;
                top: 2px;
                left: 33px;
            }

            #HEADLINE2270 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 14px;
                text-align: left;
                line-height: 1.4;
            }

            #GROUP2271 {
                width: 325px;
                height: 22.5469px;
                top: 113.674px;
                left: 3px;
            }

            #SHAPE2272 {
                width: 22.5469px;
                height: 22.5469px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2272 svg:last-child {
                fill: #d40e6d;
            }

            #HEADLINE2273 {
                width: 292px;
                top: 2px;
                left: 33px;
            }

            #HEADLINE2273 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 14px;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE2277 {
                width: 475px;
                top: 52px;
                left: 3px;
            }

            #HEADLINE2277 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-align: left;
                line-height: 1.4;
            }

            #BOX2279 {
                width: 1327.99px;
                height: 321px;
                top: 0px;
                left: 0px;
            }

            #BOX2279 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(112deg, #d40e6d, #f8a815);
                background: linear-gradient(112deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 24px -15px #000;
                -webkit-box-shadow: 0px 15px 24px -15px #000;
                border-radius: 20px;
            }

            #IMAGE2280 {
                width: 1917.93px;
                height: 914.667px;
                top: 3px;
                left: 1920.74px;
            }

            #IMAGE2280 > .ladi-image > .ladi-image-background {
                width: 1917.93px;
                height: 942.982px;
                top: -28.3152px;
                left: 0px;
                background-image: url("{{asset('img/anhbia1.jpg')}}");
            }

            #IMAGE2281 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 867.469px;
            }

            #IMAGE2281 > .ladi-image > .ladi-image-background {
                width: 775.063px;
                height: 549.848px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/a70a002c20f7eca9b5e6-20220221131716.jpg')}});
            }

            #IMAGE2281 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2281.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2281:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2282 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 1698.47px;
            }

            #IMAGE2282 > .ladi-image > .ladi-image-background {
                width: 915.675px;
                height: 542.4px;
                top: 0px;
                left: -91px;
                background-image: url({{asset('img/a2d6e372c3a90ff756b8-20220221131710.jpg')}});
            }

            #IMAGE2282 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2282.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2282:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2283 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 2535.47px;
            }

            #IMAGE2283 > .ladi-image > .ladi-image-background {
                width: 964.267px;
                height: 542.4px;
                top: 0px;
                left: -142px;
                background-image: url({{asset('img/a4a41dd33f08f356aa19-20220221131716.jpg')}});
            }

            #IMAGE2283 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2283.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2283:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2284 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 3365.47px;
            }

            #IMAGE2284 > .ladi-image > .ladi-image-background {
                width: 964.568px;
                height: 542.502px;
                top: -0.101687px;
                left: -62px;
                background-image: url({{asset('img/e9c4bec290195c470508-20220221131716.jpg')}});
            }

            #IMAGE2284 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2284.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2284:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2285 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 4203.47px;
            }

            #IMAGE2285 > .ladi-image > .ladi-image-background {
                width: 1012.73px;
                height: 569.4px;
                top: -27px;
                left: -90px;
                background-image: url({{asset('img/40000bcc2417e849b106-20220221131710.jpg')}});
            }

            #IMAGE2285 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2285.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2285:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #CAROUSEL2299 {
                width: 1352.2px;
                height: 793px;
                top: 321.842px;
                left: -73px;
                text-align: center;
            }

            #CAROUSEL2299 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2305 {
                width: 1276.93px;
                height: 663.951px;
                top: 92.41px;
                left: 42px;
            }

            #IMAGE2305 > .ladi-image > .ladi-image-background {
                width: 1276.93px;
                height: 670.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/mat-bang-shophouse-6x22-ocean-residence-novaworld-phan-thiet-binh-thuan-20220221124019.jpg')}});
            }

            #IMAGE2307 {
                width: 1044.63px;
                height: 688.2px;
                top: 80.2855px;
                left: 1502.68px;
            }

            #IMAGE2307 > .ladi-image > .ladi-image-background {
                width: 1044.63px;
                height: 736.381px;
                top: -48.1805px;
                left: 0px;
                background-image: url({{asset('img/20220128105602-6d98_wm-20220221125332.jpg')}});
            }

            #BUTTON_TEXT2320 {
                width: 353px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2320 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2320 {
                width: 353.395px;
                height: 57px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2320 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2320 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2322 {
                width: 353px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2322 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2322 {
                width: 353.395px;
                height: 57px;
                top: 0px;
                left: 375.482px;
            }

            #BUTTON2322 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2322 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2324 {
                width: 353px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2324 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2324 {
                width: 353.395px;
                height: 57px;
                top: 0px;
                left: 750.965px;
            }

            #BUTTON2324 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2324 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_GROUP2319 {
                width: 1104.36px;
                height: 57px;
                top: 225.626px;
                left: 37.82px;
            }

            #BUTTON_GROUP2319.ladi-animation > .ladi-button-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2349 {
                width: 1008px;
                height: 120.5px;
                top: 90px;
                left: 0px;
            }

            #GROUP2349.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2350 {
                width: 1008px;
                height: 191px;
                top: 98.5px;
                left: -6px;
            }

            #GROUP2350.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2425 {
                width: 1514.31px;
                height: 154px;
                top: 6.5px;
                left: 8px;
            }

            #BOX2425 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(72px);
            }

            #LINE2426 {
                width: 173px;
                top: 36px;
                left: 637.798px;
            }

            #LINE2426 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(212, 14, 110);
                border-right: 2px solid rgb(212, 14, 110);
                border-bottom: 2px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE2426 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #HEADLINE2432 {
                width: 355px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2432 > .ladi-headline {
                font-family: "ITCEDSCR.TTF";
                background: #d40e6d;
                background: -webkit-linear-gradient(106deg, #d40e6d, #f8a815);
                background: linear-gradient(106deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 170px;
                line-height: 1.6;
            }

            #HEADLINE2432 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2434 {
                width: 566px;
                top: 124.6px;
                left: 350px;
            }

            #HEADLINE2434 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 18px;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #SHAPE2437 {
                width: 1928px;
                height: 66.5px;
                top: -29.35px;
                left: -364px;
            }

            #SHAPE2437 > .ladi-shape {
                transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
            }

            #SHAPE2437 svg:last-child {
                fill: #00255F;
            }

            #HEADLINE2438 {
                width: 35px;
                top: 167.95px;
                left: 62px;
            }

            #HEADLINE2438 > .ladi-headline {
                background: #f8a815;
                background: -webkit-linear-gradient(24deg, #f8a815, #d40e6d);
                background: linear-gradient(24deg, #f8a815, #d40e6d);
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 5px;
                line-height: 1.4;
            }

            #HEADLINE2438 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2439 {
                width: 920px;
                top: 26px;
                left: 18px;
            }

            #LIST_PARAGRAPH2439 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            /*#LIST_PARAGRAPH2439 ul li {*/
            /*    padding-left: 39px;*/
            /*}*/

            /*#LIST_PARAGRAPH2439 ul li:before {*/
            /*    content: counter(linum, none);*/
            /*    color: rgba(84, 84, 84, 1.0);*/
            /*    font-size: 37px;*/
            /*    top: -5px;*/
            /*}*/

            #LIST_PARAGRAPH2440 {
                width: 954px;
                top: 1726.15px;
                left: 211px;
            }

            #LIST_PARAGRAPH2440 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2440.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2440 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2440 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2441 {
                width: 1919.36px;
                height: 740.693px;
                top: 1251.15px;
                left: -360px;
            }

            #IMAGE2441 > .ladi-image > .ladi-overlay {
                background-size: cover;
                background-attachment: scroll;
                background-origin: content-box;
                background-image: url({{asset("img/novaworld-phan-thiet-20220220193953.jpg")}});
                background-position: center bottom;
                background-repeat: no-repeat;
            }

            #IMAGE2441 > .ladi-image > .ladi-image-background {
                width: 1919.36px;
                height: 740.693px;
                top: 0px;
                left: 0px;
                background-image: url({{asset("img/novaworld-phan-thiet-20220220193953.jpg")}});
            }

            #BOX2442 {
                width: 1501px;
                height: 562.85px;
                top: 1695.65px;
                left: -149px;
            }

            #BOX2442 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 37px;
            }

            #HEADLINE2443 {
                width: 35px;
                top: 165.1px;
                left: 1113px;
            }

            #HEADLINE2443 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(157deg, #d40e6d, #f8a815);
                background: linear-gradient(157deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 3px;
                line-height: 1.4;
            }

            #HEADLINE2443 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2444 {
                width: 897px;
                top: 40px;
                left: 94px;
            }

            #HEADLINE2444 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 16px;
                text-transform: uppercase;
                text-align: right;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2447 {
                width: 563px;
                top: 227.85px;
                left: 0px;
            }

            #LIST_PARAGRAPH2447 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2447 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2447 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE2448 {
                width: 35px;
                top: 167.95px;
                left: 58px;
            }

            #HEADLINE2448 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 3px;
                line-height: 1.4;
            }

            #HEADLINE2448 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2449 {
                width: 958px;
                top: 72px;
                left: 0px;
            }

            #LIST_PARAGRAPH2449 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2449 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2449 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE2454 {
                width: 1070px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2454 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(149deg, #d40e6d, #f8a815);
                background: linear-gradient(149deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 34px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2454 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2455 {
                width: 1045px;
                top: 92.61px;
                left: 30.5px;
            }

            #HEADLINE2455 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #GROUP2453 {
                width: 1075.5px;
                height: 118.61px;
                top: 0px;
                left: 0px;
            }

            #GROUP2453.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2456 {
                width: 544px;
                top: 114.61px;
                left: 245.876px;
            }

            #LINE2456 > .ladi-line > .ladi-line-container {
                border-top: 3px solid rgb(212, 14, 109);
                border-right: 3px solid rgb(212, 14, 109);
                border-bottom: 3px solid rgb(212, 14, 109);
                border-left: 0px !important;
            }

            #LINE2456 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #LIST_PARAGRAPH2459 {
                width: 656px;
                top: 111.32px;
                left: 249.263px;
            }

            #LIST_PARAGRAPH2459 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 16px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2459 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2459 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 42px;
                height: 42px;
                top: -7px;
            }

            #GROUP2460 {
                width: 1327.99px;
                height: 321px;
                top: 167.941px;
                left: -56.5px;
            }

            #GROUP2242 {
                width: 416px;
                height: 475px;
                top: 66.8595px;
                left: 58.5px;
            }

            #SECTION2215 {
                height: 591.325px;
            }

            #SECTION2215 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2215 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #GROUP2229 {
                width: 661.003px;
                height: 136.454px;
                top: 314.046px;
                left: 496px;
            }

            #GROUP2239 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 505.498px;
            }

            #GROUP2239.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2241 {
                width: 131px;
                top: 30.227px;
                left: 11.501px;
            }

            #HEADLINE2241 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2240 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX2240 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2236 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 338px;
            }

            #GROUP2236.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2238 {
                width: 140px;
                top: 30.727px;
                left: 8.7525px;
            }

            #HEADLINE2238 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2237 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX2237 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2233 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 170px;
            }

            #GROUP2233.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2235 {
                width: 149px;
                top: 26.227px;
                left: 3.2525px;
            }

            #HEADLINE2235 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2234 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX2234 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2230 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #GROUP2230.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2232 {
                width: 131px;
                top: 33.227px;
                left: 12.253px;
            }

            #HEADLINE2232 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2231 {
                width: 155.505px;
                height: 136.454px;
                top: 0px;
                left: 0px;
            }

            #BOX2231 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(184deg, #d40e6d, #f8a815);
                background: linear-gradient(184deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2226 {
                width: 795px;
                height: 145px;
                top: 156.119px;
                left: 496px;
            }

            #GROUP2226.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2228 {
                width: 795px;
                top: 75px;
                left: 0px;
            }

            #HEADLINE2228 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 22px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE2228.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2227 {
                width: 584px;
                top: 0px;
                left: 1px;
            }

            #HEADLINE2227 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE2227.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #FORM2221 {
                width: 344.302px;
                height: 186px;
                top: 197.555px;
                left: 39.3488px;
            }

            #FORM2221 > .ladi-form {
                color: rgb(0, 0, 0);
                font-size: 14px;
                letter-spacing: 0px;
                line-height: 1.6;
            }

            #FORM2221 .ladi-form-item .ladi-form-control::placeholder, #FORM2221 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: #000;
            }

            #FORM2221 .ladi-form-item {
                padding-left: 11px;
                padding-right: 11px;
            }

            #FORM2221 .ladi-form-item.ladi-form-checkbox {
                padding-left: 16px;
                padding-right: 16px;
            }

            #FORM2221 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20%23000%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM2221 .ladi-form-item-container, #FORM2221 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(162, 162, 162);
                border-width: 1px;
            }

            #FORM2221 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(162, 162, 162);
            }

            #FORM2221 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
            }

            #FORM_ITEM2225 {
                width: 344.302px;
                height: 51.8157px;
                top: 67.0921px;
                left: 0px;
            }

            #FORM_ITEM2224 {
                width: 344.302px;
                height: 51.8157px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2222 {
                width: 344.302px;
                height: 51.8157px;
                top: 134.184px;
                left: 0px;
            }

            #BUTTON2222 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(191deg, #FFED00, #FF0000);
                background: linear-gradient(191deg, #FFED00, #FF0000);
            }

            #BUTTON2222 > .ladi-button {
                box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                -webkit-box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                border-radius: 3px;
            }

            #BUTTON_TEXT2222 {
                width: 344px;
                top: 13.324px;
                left: 0px;
            }

            #BUTTON_TEXT2222 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 19px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP2218 {
                width: 387.586px;
                height: 76px;
                top: 99.986px;
                left: 17.707px;
            }

            #HEADLINE2220 {
                width: 388px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2220 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(132deg, #d40e6d, #f8a815);
                background: linear-gradient(132deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 26px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2220 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2219 {
                width: 299px;
                top: 34px;
                left: 44.2674px;
            }

            #HEADLINE2219 > .ladi-headline {
                color: rgb(32, 32, 32);
                font-size: 15px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2217 {
                width: 416px;
                height: 475px;
                top: 0px;
                left: 0px;
            }

            #BOX2217 > .ladi-box {
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #BOX2216 {
                width: 3932.16px;
                height: 386.027px;
                top: 111.846px;
                left: -715.97px;
            }

            #BOX2216 > .ladi-box > .ladi-overlay {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{asset('img/0b8f0f48956863363a79-20220112050141.jpg')}});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.17;
            }

            #BOX2216 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 10px;
            }

            #IMAGE2461 {
                width: 664.211px;
                height: 480.008px;
                top: 504.914px;
                left: 44px;
            }

            #IMAGE2461 > .ladi-image > .ladi-image-background {
                width: 664.211px;
                height: 548.172px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/novaworld-phan-thiet-0907750088-phoi-canh-6-20210425163509.jpg')}});
            }

            #IMAGE2461 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2462 {
                width: 664.211px;
                height: 480.008px;
                top: 504.914px;
                left: 790px;
            }

            #IMAGE2462 > .ladi-image > .ladi-image-background {
                width: 1064.37px;
                height: 480.008px;
                top: 0px;
                left: -221px;
                background-image: url({{asset('img/novaworl-phan-thiet-4-20210425152455.jpg')}});
            }

            #IMAGE2462 > .ladi-image {
                border-radius: 5px;
            }

            #BOX2464 {
                width: 555px;
                height: 5px;
                top: 193.6px;
                left: 180.5px;
            }

            #BOX2464 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(134deg, #d40e6d, #f8a815);
                background: linear-gradient(134deg, #d40e6d, #f8a815);
                border-radius: 93px;
            }

            #HEADLINE2465 {
                width: 833px;
                top: 0px;
                left: 61.5px;
            }

            #HEADLINE2465 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(154deg, #d40e6d, #f8a815);
                background: linear-gradient(154deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 17px;
                line-height: 1.6;
            }

            #HEADLINE2465 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #SHAPE2467 {
                width: 484px;
                height: 101px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2467 svg:last-child {
                fill: url("#SHAPE2467_desktop_gradient");
            }

            #PARAGRAPH2468 {
                width: 312px;
                top: 13.4176px;
                left: 99.5px;
            }

            #PARAGRAPH2468 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 17px;
                line-height: 1.6;
            }

            #GROUP2466 {
                width: 484px;
                height: 53.8353px;
                top: 29.582px;
                left: 887px;
            }

            #IMAGE2469 {
                width: 647px;
                height: 452.336px;
                top: 8.914px;
                left: 1552px;
            }

            #IMAGE2469 > .ladi-image > .ladi-image-background {
                width: 647px;
                height: 452.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/catalogue-gsw6-20210329084727.jpg')}});
            }

            #IMAGE2469 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2469.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE2471 {
                width: 484px;
                height: 130px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2471 svg:last-child {
                fill: url("#SHAPE2471_desktop_gradient");
            }

            #PARAGRAPH2472 {
                width: 352px;
                top: 13.4176px;
                left: 70px;
            }

            #PARAGRAPH2472 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 17px;
                line-height: 1.6;
            }

            #GROUP2470 {
                width: 484px;
                height: 53.8353px;
                top: 29.582px;
                left: 1641px;
            }

            #IMAGE2473 {
                width: 647px;
                height: 452.336px;
                top: 8.914px;
                left: 2301px;
            }

            #IMAGE2473 > .ladi-image > .ladi-image-background {
                width: 647px;
                height: 452.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/ttxxvnktvn-20220221115918.jpg')}});
            }

            #IMAGE2473 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2473.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE2475 {
                width: 484px;
                height: 128px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2475 svg:last-child {
                fill: url("#SHAPE2475_desktop_gradient");
            }

            #PARAGRAPH2476 {
                width: 352px;
                top: 13.4176px;
                left: 70px;
            }

            #PARAGRAPH2476 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 17px;
                line-height: 1.6;
            }

            #GROUP2474 {
                width: 484px;
                height: 53.8353px;
                top: 29.582px;
                left: 2404px;
            }

            #HEADLINE2477 {
                width: 648px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2477 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(120deg, #d40e6d, #f8a815);
                background: linear-gradient(120deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 18px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2477 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #CAROUSEL2478 {
                width: 853.302px;
                height: 567px;
                top: 1356.35px;
                left: -356px;
            }

            #CAROUSEL2478 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2479 {
                width: 853px;
                height: 567px;
                top: 0px;
                left: 0px;
            }

            #IMAGE2479 > .ladi-image > .ladi-image-background {
                width: 1008px;
                height: 567px;
                top: 0px;
                left: -71px;
                background-image: url({{asset('img/c358a65c858749d91096-20220221121613.jpg')}});
            }

            #BOX2484 {
                width: 427px;
                height: 462px;
                top: 11.8595px;
                left: 714.5px;
            }

            #BOX2484 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(105deg, #d40e6d, #f8a815);
                background: linear-gradient(105deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #LIST_PARAGRAPH2486 {
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2486 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2486 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2486 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2487 {
                width: 649px;
                top: 0px;
                left: 569px;
            }

            #LIST_PARAGRAPH2487 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2487 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2487 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2488 {
                width: 521px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2488 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: left;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2488 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2488 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2489 {
                width: 642px;
                top: 0px;
                left: 557px;
            }

            #LIST_PARAGRAPH2489 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: left;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2489 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2489 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2492 {
                width: 664.211px;
                height: 480.008px;
                top: 10.914px;
                left: 1544px;
            }

            #IMAGE2492 > .ladi-image > .ladi-image-background {
                width: 976.699px;
                height: 548.172px;
                top: 0px;
                left: -33.5019px;
                background-image: url({{asset('img/pho-am-thuc-600x400-20210425163539.jpg')}});
            }

            #IMAGE2492 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2493 {
                width: 664.211px;
                height: 480.008px;
                top: 504.914px;
                left: 1544px;
            }

            #IMAGE2493 > .ladi-image > .ladi-image-background {
                width: 1064.37px;
                height: 480.008px;
                top: 0px;
                left: -221px;
                background-image: url({{asset('img/8-1-20220221120818.jpg')}});
            }

            #IMAGE2493 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2494 {
                width: 853px;
                height: 567px;
                top: 0px;
                left: 853px;
            }

            #IMAGE2494 > .ladi-image > .ladi-image-background {
                width: 1008px;
                height: 567px;
                top: 0px;
                left: -71px;
                background-image: url({{asset('img/e4be2b51088ac4d49d9b-20220221121613.jpg')}});
            }

            #IMAGE2495 {
                width: 853px;
                height: 567px;
                top: 0px;
                left: 1706px;
            }

            #IMAGE2495 > .ladi-image > .ladi-image-background {
                width: 1008px;
                height: 567px;
                top: 0px;
                left: -71px;
                background-image: url({{asset('img/693080fca3276f793636-20220221121613.jpg')}});
            }

            #IMAGE2496 {
                width: 1194px;
                height: 826.681px;
                top: 283.6px;
                left: 0px;
            }

            #IMAGE2496 > .ladi-image > .ladi-image-background {
                width: 1194px;
                height: 826.681px;
                top: 0px;
                left: 0px;
                background-image: url("{{asset('img/anh3.jpg')}}");
            }

            #IMAGE2496 > .ladi-image {
                border-radius: 19px;
            }

            #IMAGE2497 {
                width: 1288.39px;
                height: 681.861px;
                top: 80.2855px;
                left: 2741.55px;
            }

            #IMAGE2497 > .ladi-image > .ladi-image-background {
                width: 1288.39px;
                height: 726.926px;
                top: -45.0653px;
                left: 0px;
                background-image: url({{asset('img/mat-bang-ban-ve-nha-pho-55x20-ocean-residence-novaworld-phan-thiet-binh-thuan-20220221125523.jpg')}});
            }

            #HEADLINE2306 {
                width: 380px;
                top: 24.5px;
                left: 464.1px;
            }

            #HEADLINE2306 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 31px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2498 {
                width: 714px;
                top: 26.5px;
                left: 1704.1px;
            }

            #HEADLINE2498 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 23px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2499 {
                width: 714px;
                top: 24.5px;
                left: 3091.1px;
            }

            #HEADLINE2499 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 23px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #IMAGE2500 {
                width: 775.063px;
                height: 542.4px;
                top: 8.8px;
                left: 5031.47px;
            }

            #IMAGE2500 > .ladi-image > .ladi-image-background {
                width: 1012.73px;
                height: 569.4px;
                top: -27px;
                left: -90px;
                background-image: url({{asset('img/00ca9147be9c72c22b8d-20220221131709.jpg')}});
            }

            #IMAGE2500 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2500.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2500:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #BOX2501 {
                width: 430px;
                height: 490px;
                top: 59.8595px;
                left: 51.5px;
            }

            #BOX2501 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(105deg, #d40e6d, #f8a815);
                background: linear-gradient(105deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #IMAGE2502 {
                width: 414.704px;
                height: 129.946px;
                top: 57.965px;
                left: 148.648px;
            }

            #IMAGE2502 > .ladi-image > .ladi-image-background {
                width: 414.704px;
                height: 129.946px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/logo-2-20210425050751.png')}});
            }

            #GROUP2503 {
                width: 1367px;
                height: 118px;
                top: 20.25px;
                left: 91.5px;
            }

            #GROUP2504 {
                width: 1006px;
                height: 120.5px;
                top: 18.5px;
                left: 234.5px;
            }

            #GROUP2505 {
                width: 969px;
                height: 60px;
                top: 1042.05px;
                left: 115.203px;
            }

            #GROUP2505.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.5s;
                -webkit-animation-duration: 2.5s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2506 {
                width: 615px;
                height: 118px;
                top: 23.5px;
                left: 0px;
            }

            #GROUP2506.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2507 {
                width: 916px;
                height: 272px;
                top: 288px;
                left: 139.5px;
            }

            #GROUP2507.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2508 {
                width: 1235px;
                height: 366px;
                top: -29.35px;
                left: -35px;
            }

            #GROUP2508.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2509 {
                width: 983px;
                height: 72px;
                top: 0px;
                left: 0px;
            }

            #GROUP2509.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2510 {
                width: 932.5px;
                height: 72px;
                top: 51.5px;
                left: 2px;
            }

            #GROUP2510.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2511 {
                width: 983px;
                height: 123.5px;
                top: 129.15px;
                left: 211px;
            }

            #GROUP2512 {
                width: 1019px;
                height: 74px;
                top: 1153.65px;
                left: 139px;
            }

            #GROUP2512.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2513 {
                width: 1084px;
                height: 66px;
                top: 88.65px;
                left: 0px;
            }

            #GROUP2514 {
                width: 1347px;
                height: 366px;
                top: -68.15px;
                left: -74px;
            }

            #GROUP2514.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2515 {
                width: 648px;
                height: 299.85px;
                top: 1476.95px;
                left: 533px;
            }

            #GROUP2515.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2516 {
                width: 1279px;
                height: 357px;
                top: 0px;
                left: 0px;
            }

            #GROUP2516.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2517 {
                width: 958px;
                height: 97px;
                top: 169px;
                left: 283px;
            }

            #GROUP2517.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2518 {
                width: 1279px;
                height: 357px;
                top: -95px;
                left: -79px;
            }

            #GROUP2519 {
                width: 642px;
                height: 112px;
                top: 102.845px;
                left: 8.501px;
            }

            #GROUP2520 {
                width: 1218px;
                height: 72px;
                top: 124.921px;
                left: -19px;
            }

            #GROUP2520.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2521 {
                width: 1075.5px;
                height: 133.61px;
                top: 3px;
                left: 65px;
            }

            #GROUP2521.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2522 {
                width: 1199px;
                height: 104.32px;
                top: 142.29px;
                left: -4.263px;
            }

            #GROUP2522.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2523 {
                width: 975px;
                top: 147.451px;
                left: 86px;
                display: none !important;
            }

            #HEADLINE2523 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 47px;
                letter-spacing: 3px;
                line-height: 1.6;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE2523.ladi-animation > .ladi-headline {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2524 {
                width: 526px;
                top: 0px;
                left: 0px;
                display: none !important;
            }

            #HEADLINE2524 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 47px;
                line-height: 1.6;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE2524.ladi-animation > .ladi-headline {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2525 {
                width: 890.65px;
                height: 132px;
                top: -6.951px;
                left: -27px;
                display: none !important;
            }

            #BOX2525 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(25px);
            }

            #HEADLINE2526 {
                width: 342px;
                top: 27.5px;
                left: 2030px;
            }

            #HEADLINE2526 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 23px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2527 {
                width: 346px;
                top: 24.5px;
                left: 3438px;
            }

            #HEADLINE2527 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 23px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #BUTTON_TEXT2529 {
                width: 189px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2529 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2529 {
                width: 252.915px;
                height: 57px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2529 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2529 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2531 {
                width: 189px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2531 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2531 {
                width: 252.915px;
                height: 57px;
                top: 0px;
                left: 268.722px;
            }

            #BUTTON2531 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2531 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2533 {
                width: 253px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2533 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2533 {
                width: 252.915px;
                height: 57px;
                top: 0px;
                left: 537.444px;
            }

            #BUTTON2533 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2533 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2535 {
                width: 253px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2535 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2535 {
                width: 252.915px;
                height: 57px;
                top: 0px;
                left: 804.585px;
            }

            #BUTTON2535 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2535 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2537 {
                width: 253px;
                top: 12.825px;
                left: 0px;
            }

            #BUTTON_TEXT2537 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2537 {
                width: 252.915px;
                height: 57px;
                top: 0px;
                left: 1068.59px;
            }

            #BUTTON2537 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2537 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_GROUP2528 {
                width: 1321.5px;
                height: 57px;
                top: 16.24px;
                left: -1114.01px;
                display: none !important;
            }

            #BUTTON_GROUP2528.ladi-animation > .ladi-button-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2539 {
                width: 418.315px;
                height: 284.448px;
                top: 280.552px;
                left: 1260.89px;
            }

            #IMAGE2539 > .ladi-image > .ladi-image-background {
                width: 505.488px;
                height: 284.448px;
                top: 0px;
                left: -51px;
                background-image: url({{asset('img/f0f2ff2cd1f71da944e6-20220221120313.jpg')}});
            }

            #IMAGE2539 > .ladi-image {
                border-radius: 4px;
            }

            #GROUP2540 {
                width: 940.22px;
                height: 148px;
                top: 58.549px;
                left: 174.89px;
            }

            #GROUP2540.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2541 {
                width: 1061px;
                height: 222.451px;
                top: 222.549px;
                left: -333px;
            }

            #BOX2543 {
                width: 1928px;
                height: 305px;
                top: -0.0005px;
                left: -361px;
            }

            #BOX2543 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #HEADLINE2546 {
                top: 0px;
                left: 176px;
            }

            #HEADLINE2546 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 36px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.2;
            }

            #HEADLINE2546 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2547 {
                width: 1029px;
                top: 44px;
                left: 0px;
            }

            #HEADLINE2547 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #GROUP2545 {
                width: 1029px;
                height: 70px;
                top: 0px;
                left: 0px;
            }

            #GROUP2545.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2548 {
                width: 389px;
                top: 65px;
                left: 266.376px;
            }

            #LINE2548 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE2548 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2544 {
                width: 1029px;
                height: 83px;
                top: 35.24px;
                left: 94px;
            }

            #GROUP2544.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2550 {
                width: 1276.93px;
                height: 663.951px;
                top: 92.41px;
                left: 42px;
            }

            #IMAGE2550 > .ladi-image > .ladi-image-background {
                width: 1276.93px;
                height: 670.336px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/10-20220222065720.png') }});
            }

            #IMAGE2552 {
                width: 1044.63px;
                height: 688.2px;
                top: 80.2855px;
                left: 1502.68px;
            }

            #IMAGE2552 > .ladi-image > .ladi-image-background {
                width: 1044.63px;
                height: 736.381px;
                top: -48.1805px;
                left: 0px;
                background-image: url({{ asset('img/4-20220222065719.png') }});
            }

            #IMAGE2553 {
                width: 1288.39px;
                height: 687.646px;
                top: 74.5005px;
                left: 2733.55px;
            }

            #IMAGE2553 > .ladi-image > .ladi-image-background {
                width: 1288.39px;
                height: 732.711px;
                top: -45.0653px;
                left: 0px;
                background-image: url({{ asset('img/5-20220222065719.png') }});
            }

            #CAROUSEL2549 {
                width: 1352.2px;
                height: 793px;
                top: 304.842px;
                left: -80px;
            }

            #CAROUSEL2549 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #LIST_PARAGRAPH2566 {
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2566 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2566 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2566 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2567 {
                width: 649px;
                top: 0px;
                left: 569px;
            }

            #LIST_PARAGRAPH2567 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2567 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2567 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #GROUP2565 {
                width: 1218px;
                height: 72px;
                top: 124.921px;
                left: -19px;
            }

            #GROUP2565.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION2542 {
                height: 1098.63px;
                text-align: center;
            }

            #SECTION2542 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2542 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2580 {
                width: 1928px;
                height: 301.844px;
                top: -0.0005px;
                left: -361px;
            }

            #BOX2580 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #HEADLINE2583 {
                width: 599px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2583 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 36px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.2;
            }

            #HEADLINE2583 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2584 {
                width: 576px;
                top: 44px;
                left: 17.5px;
            }

            #HEADLINE2584 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #GROUP2582 {
                width: 599px;
                height: 70px;
                top: 0px;
                left: 0px;
            }

            #GROUP2582.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2585 {
                width: 389px;
                top: 65px;
                left: 59.876px;
            }

            #LINE2585 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE2585 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2581 {
                width: 599px;
                height: 83px;
                top: 35.24px;
                left: 300.5px;
            }

            #GROUP2581.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2587 {
                width: 1276.93px;
                height: 663.951px;
                top: 92.41px;
                left: 42px;
            }

            #IMAGE2587 > .ladi-image > .ladi-image-background {
                width: 1276.93px;
                height: 670.336px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/GOLF_VILLAS.png')}});
            }

            #IMAGE2589 {
                width: 1238.87px;
                height: 688.2px;
                top: 46.9002px;
                left: 2762.68px;
            }

            #IMAGE2589 > .ladi-image > .ladi-image-background {
                width: 1238.87px;
                height: 736.381px;
                top: -48.1805px;
                left: 0px;
                background-image: url({{asset('img/12-20220222071717.png')}});
            }

            #CAROUSEL2586 {
                width: 1352.2px;
                top: 301.842px;
                text-align: center;
            }

            #CAROUSEL2586 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #LIST_PARAGRAPH2603 {
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2603 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2603 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2603 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2604 {
                width: 649px;
                top: 0px;
                left: 662px;
            }

            #LIST_PARAGRAPH2604 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2604 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2604 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #GROUP2602 {
                width: 1311px;
                height: 96px;
                top: 124.921px;
                left: -47px;
            }

            #GROUP2602.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION2579 {
                height: 760.63px;
            }

            #SECTION2579 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2579 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2616 {
                width: 1288.39px;
                height: 691.862px;
                top: 74.5px;
                left: 4100.8px;
            }

            #IMAGE2616 > .ladi-image > .ladi-image-background {
                width: 1288.39px;
                height: 736.927px;
                top: -45.0653px;
                left: 0px;
                background-image: url({{ asset('img/6-20220222065719.png') }});
            }

            #IMAGE2617 {
                width: 1238.43px;
                height: 684.552px;
                top: 74.5px;
                left: 5481px;
            }

            #IMAGE2617 > .ladi-image > .ladi-image-background {
                width: 1238.43px;
                height: 684.552px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/7-20220222065719.png')}});
            }

            #IMAGE2618 {
                width: 1227.01px;
                height: 695.338px;
                top: 74.5005px;
                left: 6837.9px;
            }

            #IMAGE2618 > .ladi-image > .ladi-image-background {
                width: 1227.01px;
                height: 695.338px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/8-20220222065719.png')}});
            }

            #IMAGE2619 {
                width: 1238.87px;
                height: 694.044px;
                top: 74.5005px;
                left: 8184.8px;
            }

            #IMAGE2619 > .ladi-image > .ladi-image-background {
                width: 1238.87px;
                height: 694.044px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/9-20220222065720.png')}});
            }

            #IMAGE2620 {
                width: 1282.99px;
                height: 688.296px;
                top: 46.8522px;
                left: 1381.1px;
            }

            #IMAGE2620 > .ladi-image > .ladi-image-background {
                width: 1282.99px;
                height: 688.296px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/13-20220222071818.png')}});
            }

            #BUTTON2621 {
                width: 237px;
                height: 56px;
                top: auto;
                left: auto;
                bottom: 5px;
                right: 5px;
                position: fixed;
                z-index: 90000050;
            }

            #BUTTON2621 > .ladi-button > .ladi-button-background {
                background-color: rgb(132, 5, 5);
            }

            #BUTTON2621 > .ladi-button {
                border-radius: 10px;
            }

            #BUTTON_TEXT2621 {
                width: 237px;
                top: 9px;
                left: 0px;
            }

            #BUTTON_TEXT2621 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #IMAGE2624 {
                width: 446.276px;
                height: 410.645px;
                top: 0px;
                left: 0px;
            }

            #IMAGE2624 > .ladi-image > .ladi-overlay {
                background-color: rgb(0, 37, 95);
            }

            #IMAGE2624 > .ladi-image > .ladi-image-background {
                width: 552.276px;
                height: 430.215px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh5.jpg')}});
            }

            #IMAGE2624 > .ladi-image {
                border-radius: 32px;
            }

            #BUTTON_TEXT2626 {
                width: 246px;
                top: 11.2885px;
                left: 0px;
            }

            #BUTTON_TEXT2626 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 18px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-color: rgb(142, 12, 77);
            }

            #BUTTON2626 {
                width: 246.2px;
                height: 55.2052px;
                top: 143.873px;
                left: 82.583px;
            }

            #BUTTON2626 > .ladi-button > .ladi-button-background {
                background-color: rgb(163, 18, 10);
            }

            #BUTTON2626 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 5px;
            }

            #FORM_ITEM2628 {
                width: 411.366px;
                height: 50.1713px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM2629 {
                width: 411.366px;
                height: 50.1713px;
                top: 69.3944px;
                left: 0px;
            }

            #FORM2625 {
                width: 411.366px;
                height: 199.078px;
                top: 161.683px;
                left: 17.821px;
            }

            #FORM2625 > .ladi-form {
                color: rgb(115, 70, 70);
                font-size: 14px;
                line-height: 1.6;
            }

            #FORM2625 .ladi-form-item .ladi-form-control::placeholder, #FORM2625 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: rgba(115, 70, 70, 1.0);
            }

            #FORM2625 .ladi-form-item {
                padding-left: 8px;
                padding-right: 8px;
            }

            #FORM2625 .ladi-form-item.ladi-form-checkbox {
                padding-left: 13px;
                padding-right: 13px;
            }

            #FORM2625 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(115%2C%2070%2C%2070%2C%201.0)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM2625 .ladi-form-item-container, #FORM2625 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(238, 238, 238);
                border-width: 1px;
                border-radius: 3px;
            }

            #FORM2625 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(238, 238, 238);
            }

            #FORM2625 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
                border-radius: 2px
            }

            #HEADLINE2630 {
                width: 381px;
                top: 24.2388px;
                left: 34.004px;
            }

            #HEADLINE2630 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 31px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2630 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2623 {
                width: 446.276px;
                height: 410.645px;
                top: 4.095px;
                left: 6px;
            }

            #GROUP2623.ladi-animation > .ladi-group {
                animation-name: fadeIn;
                -webkit-animation-name: fadeIn;
                animation-delay: 0s;
                -webkit-animation-delay: 0s;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #POPUP2622 {
                width: 457.276px;
                height: 421px;
                top: 0px;
                left: 0px;
                bottom: 0px;
                right: 0px;
                margin: auto;
                border-radius: 25px;
            }

            #POPUP2622 > .ladi-popup > .ladi-overlay {
                border-radius: 25px;
            }

            #POPUP2622 > .ladi-popup > .ladi-popup-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(65deg, #d40e6d, #f8a815);
                background: linear-gradient(65deg, #d40e6d, #f8a815);
                border-radius: 25px;
            }

            #POPUP2622 > .ladi-popup {
                box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
                -webkit-box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
            }

            #POPUP2622.ladi-animation > .ladi-popup {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-duration: 0.5s;
                -webkit-animation-duration: 0.5s;
            }

            #IMAGE2632 {
                width: 52.6724px;
                height: 64.7109px;
                top: 79.6446px;
                left: 64.641px;
            }

            #IMAGE2632 > .ladi-image > .ladi-image-background {
                width: 52.6724px;
                height: 64.7109px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/123-20220222082012.png') }});
            }

            #HEADLINE2634 {
                width: 278px;
                top: 106px;
                left: 127.641px;
            }

            #HEADLINE2634 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                line-height: 1.6;
            }

            #SHAPE2635 {
                width: 53px;
                height: 53px;
                top: auto;
                left: 15px;
                bottom: 15px;
                right: auto;
                position: fixed;
                z-index: 90000050;
            }

            #SHAPE2635.ladi-animation > .ladi-shape {
                animation-name: pulse;
                -webkit-animation-name: pulse;
                animation-delay: 1s;
                -webkit-animation-delay: 1s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: infinite;
                -webkit-animation-iteration-count: infinite;
            }

            #SHAPE2635 svg:last-child {
                fill: rgba(22, 199, 46, 1);
            }
        }

        @media (max-width: 767px) {
            #SECTION_POPUP {
                height: 0px;
            }

            #SECTION_POPUP .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION14 {
                height: 1245.43px;
            }

            #SECTION14 > .ladi-section-background {
                background-color: rgb(0, 37, 95);
            }

            #SECTION14 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #tongquan {
                height: 287.744px;
            }

            #tongquan > .ladi-section-background {
                background-color: rgb(0, 37, 95);
            }

            #tongquan .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #POPUP507 {
                width: 391.282px;
                height: 389px;
                top: 0px;
                left: 0px;
                bottom: 0px;
                right: 0px;
                margin: auto;
                border-radius: 28px;
            }

            #POPUP507 > .ladi-popup > .ladi-overlay {
                border-radius: 28px;
            }

            #POPUP507 > .ladi-popup > .ladi-popup-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(54deg, #d40e6d, #f8a815);
                background: linear-gradient(54deg, #d40e6d, #f8a815);
                border-radius: 28px;
            }

            #POPUP507 > .ladi-popup {
                box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
                -webkit-box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
            }

            #POPUP507.ladi-animation > .ladi-popup {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-duration: 0.5s;
                -webkit-animation-duration: 0.5s;
            }

            #IMAGE509 {
                width: 379.748px;
                height: 379.5px;
                top: 0px;
                left: 0px;
            }

            #IMAGE509 > .ladi-image > .ladi-overlay {
                background-color: rgb(0, 37, 95);
            }

            #IMAGE509 > .ladi-image > .ladi-image-background {
                width: 384.748px;
                height: 429.5px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh5.jpg')}});
            }

            #IMAGE509 > .ladi-image {
                border-radius: 32px;
            }

            #BUTTON_TEXT511 {
                width: 311px;
                top: 9.17475px;
                left: 0px;
            }

            #BUTTON_TEXT511 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 19px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #BUTTON511 {
                width: 310.935px;
                height: 48.932px;
                top: 106.864px;
                left: 0px;
            }

            #BUTTON511 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(199deg, #FFED00, #FF0000);
                background: linear-gradient(199deg, #FFED00, #FF0000);
            }

            #BUTTON511 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 3px;
            }

            #FORM_ITEM513 {
                width: 310.935px;
                height: 40.7767px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM515 {
                width: 310.935px;
                height: 40.7767px;
                top: 53.0096px;
                left: 0px;
            }

            #FORM510 {
                width: 310.935px;
                height: 155.796px;
                top: 156.074px;
                left: 34.4065px;
            }

            #FORM510 > .ladi-form {
                color: rgb(115, 70, 70);
                font-size: 14px;
                line-height: 1.6;
            }

            #FORM510 .ladi-form-item .ladi-form-control::placeholder, #FORM510 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: rgba(115, 70, 70, 1.0);
            }

            #FORM510 .ladi-form-item {
                padding-left: 8px;
                padding-right: 8px;
            }

            #FORM510 .ladi-form-item.ladi-form-checkbox {
                padding-left: 13px;
                padding-right: 13px;
            }

            #FORM510 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(115%2C%2070%2C%2070%2C%201.0)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM510 .ladi-form-item-container, #FORM510 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(238, 238, 238);
                border-width: 1px;
                border-radius: 3px;
            }

            #FORM510 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(238, 238, 238);
            }

            #FORM510 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
                border-radius: 2px
            }

            #HEADLINE516 {
                width: 289px;
                top: 59.5663px;
                left: 41.5629px;
            }

            #HEADLINE516 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 28px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE516 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE517 {
                width: 276px;
                top: 98.5663px;
                left: 48.0629px;
            }

            #HEADLINE517 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP508 {
                width: 379.748px;
                height: 379.5px;
                top: 4.5px;
                left: 6.5285px;
            }

            #GROUP508.ladi-animation > .ladi-group {
                animation-name: fadeIn;
                -webkit-animation-name: fadeIn;
                animation-delay: 0s;
                -webkit-animation-delay: 0s;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #CAROUSEL520 {
                width: 420px;
                height: 684.098px;
                top: 0px;
                left: 0px;
            }

            #CAROUSEL520 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE521 {
                width: 913.65px;
                height: 682.098px;
                top: 61px;
                left: -73px;
            }

            #IMAGE521 > .ladi-image > .ladi-image-background {
                width: 1387.32px;
                height: 682.098px;
                top: 0px;
                left: -1px;
                background-image: url({{asset('img/novaword-phan-thiet-20220220181356.jpg')}});
            }

            #IMAGE531 {
                width: 400px;
                height: 200px;
                top: 550.681px;
                left: 130px;
                mix-blend-mode: screen;
                will-change: transform, opacity;
            }

            #IMAGE531 > .ladi-image > .ladi-image-background {
                width: 400px;
                height: 200px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh6.png')}});
            }

            #BOX532 {
                width: 405px;
                height: 425.418px;
                top: 794.13px;
                left: 7.7723px;
            }

            #BOX532 > .ladi-box {
                background-color: rgb(255, 255, 255);
                border-radius: 12px;
                filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px 15px 13px);
            }

            #HEADLINE572 {
                width: 402px;
                top: 98px;
                left: 0px;
            }

            #HEADLINE572 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE572.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH573 {
                width: 314px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH573 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH573 ul li {
                padding-left: 36px;
            }

            #LIST_PARAGRAPH573 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%209%2C%209%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -7px;
            }

            #LIST_PARAGRAPH574 {
                width: 314px;
                top: 50px;
                left: 0px;
            }

            #LIST_PARAGRAPH574 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH574 ul li {
                padding-left: 35px;
            }

            #LIST_PARAGRAPH574 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%208%2C%208%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -10px;
            }

            #LIST_PARAGRAPH575 {
                width: 289px;
                top: 102px;
                left: 0px;
            }

            #LIST_PARAGRAPH575 > .ladi-list-paragraph {
                color: rgb(1, 31, 66);
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH575 ul li {
                padding-left: 36px;
            }

            #LIST_PARAGRAPH575 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(233%2C%208%2C%208%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 40px;
                height: 40px;
                top: -8px;
            }

            #BUTTON576 {
                width: 322px;
                height: 50px;
                top: 181px;
                left: 0px;
            }

            #BUTTON576 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(204deg, #FFED00, #FF0000);
                background: linear-gradient(204deg, #FFED00, #FF0000);
            }

            #BUTTON576 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 10px;
            }

            #BUTTON_TEXT576 {
                width: 322px;
                top: 9px;
                left: 0px;
            }

            #BUTTON_TEXT576 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 17px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP577 {
                width: 314px;
                height: 169px;
                top: 0px;
                left: 12px;
            }

            #GROUP578 {
                width: 326px;
                height: 231px;
                top: 946.71px;
                left: 44.928px;
            }

            #GROUP578.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1397 {
                width: 368px;
                top: 0px;
                left: 17px;
            }

            #HEADLINE1397 > .ladi-headline {
                background: #f8a815;
                background: -webkit-linear-gradient(211deg, #f8a815, #d40e6d);
                background: linear-gradient(211deg, #f8a815, #d40e6d);
                color: rgb(175, 22, 90);
                font-size: 23px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1397.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1397 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP1414 {
                width: 402px;
                height: 122px;
                top: 0px;
                left: 116.999px;
            }

            #LINE1416 {
                width: 173px;
                top: 100px;
                left: 0px;
            }

            #LINE1416 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(212, 14, 110);
                border-right: 2px solid rgb(212, 14, 110);
                border-bottom: 2px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1416 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1418 {
                width: 518.999px;
                height: 122px;
                top: 0px;
                left: 0px;
            }

            #GROUP1418.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1420 {
                height: 638.744px;
            }

            #SECTION1420.ladi-animation {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.8s;
                -webkit-animation-duration: 2.8s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1420 > .ladi-section-background {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{ asset('img/anh4.jpg') }});
                background-position: center center;
                background-repeat: repeat;
            }

            #SECTION1420 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1426 {
                width: 450px;
                height: 335.519px;
                top: 0px;
                left: -17px;
            }

            #BOX1426 > .ladi-box {
                opacity: 0.92;
                background-color: rgb(255, 255, 255);
            }

            #SECTION1457 {
                height: 1732.3px;
            }

            #SECTION1457 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1504 {
                width: 500px;
                height: 636.438px;
                top: 0px;
                left: -39px;
            }

            #BOX1504 > .ladi-box > .ladi-overlay {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{ asset('img/tien-ich-du-an-hoi-an-dor-cam-nam-hoi-an-cdt-bamboo-capital-20220112165641.jpg') }});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.17;
            }

            #BOX1504 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 10px;
            }

            #BOX1505 {
                width: 392px;
                height: 394.326px;
                top: 439.326px;
                left: 15px;
            }

            #BOX1505 > .ladi-box {
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #FORM1506 {
                width: 350px;
                height: 186px;
                top: 600.086px;
                left: 35px;
            }

            #FORM1506 > .ladi-form {
                color: rgb(0, 0, 0);
                font-size: 14px;
                letter-spacing: 0px;
                line-height: 1.6;
            }

            #FORM1506 .ladi-form-item .ladi-form-control::placeholder, #FORM1506 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: #000;
            }

            #FORM1506 .ladi-form-item {
                padding-left: 11px;
                padding-right: 11px;
            }

            #FORM1506 .ladi-form-item.ladi-form-checkbox {
                padding-left: 16px;
                padding-right: 16px;
            }

            #FORM1506 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20%23000%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM1506 .ladi-form-item-container, #FORM1506 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(162, 162, 162);
                border-width: 1px;
            }

            #FORM1506 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(162, 162, 162);
            }

            #FORM1506 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
            }

            #BUTTON1507 {
                width: 350px;
                height: 51.8156px;
                top: 134.184px;
                left: 0px;
            }

            #BUTTON1507 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(200deg, #FFED00, #FF0000);
                background: linear-gradient(200deg, #FFED00, #FF0000);
            }

            #BUTTON1507 > .ladi-button {
                box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                -webkit-box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                border-radius: 3px;
            }

            #BUTTON_TEXT1507 {
                width: 350px;
                top: 13.324px;
                left: 0px;
            }

            #BUTTON_TEXT1507 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #FORM_ITEM1509 {
                width: 350px;
                height: 51.8156px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM1510 {
                width: 350px;
                height: 51.8156px;
                top: 67.092px;
                left: 0px;
            }

            #GROUP1511 {
                width: 394px;
                height: 78px;
                top: 469.089px;
                left: 15px;
            }

            #GROUP1511.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1512 {
                width: 299px;
                top: 36px;
                left: 52.5px;
            }

            #HEADLINE1512 > .ladi-headline {
                color: rgb(32, 32, 32);
                font-size: 15px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1513 {
                width: 394px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1513 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(123deg, #d40e6d, #f8a815);
                background: linear-gradient(123deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 24px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE1513 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1515 {
                width: 642px;
                top: 102px;
                left: 0px;
            }

            #HEADLINE1515 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE1515.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1516 {
                width: 374px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1516 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE1516.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION1522 {
                height: 867.55px;
            }

            #SECTION1522 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1522 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1561 {
                width: 177.481px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX1561 > .ladi-box {
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(212, 14, 110);
                border-width: 3px;
                border-radius: 7px;
            }

            #HEADLINE1562 {
                width: 139px;
                top: 9.187px;
                left: 19.2405px;
            }

            #HEADLINE1562 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1563 {
                width: 177.481px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #GROUP1563.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1185 {
                width: 392px;
                height: 69px;
                top: 0px;
                left: 0px;
            }

            #GROUP1185.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE812 {
                width: 375px;
                top: 31px;
                left: 3px;
            }

            #HEADLINE812 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE810 {
                width: 392px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE810 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 22px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE810 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #SECTION785 {
                height: 1115.23px;
            }

            #SECTION785 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION785 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX1699 {
                width: 177.481px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX1699 > .ladi-box {
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                background-color: rgb(255, 255, 255);
                border-radius: 7px;
            }

            #HEADLINE1700 {
                width: 150px;
                top: 18.187px;
                left: 13.7405px;
            }

            #HEADLINE1700 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1698 {
                width: 177.481px;
                height: 120.374px;
                top: 0px;
                left: 194.024px;
            }

            #GROUP1698.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX1702 {
                width: 371.505px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX1702 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(118deg, #d40e6d, #f8a815);
                background: linear-gradient(118deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #HEADLINE1703 {
                width: 314px;
                top: 25.2249px;
                left: 29.2714px;
            }

            #HEADLINE1703 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP1701 {
                width: 371.505px;
                height: 120.374px;
                top: 132.08px;
                left: 0px;
            }

            #GROUP1701.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE1708 {
                width: 228px;
                top: 66px;
                left: 82px;
            }

            #LINE1708 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE1708 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1709 {
                width: 392px;
                height: 84px;
                top: 25px;
                left: 11px;
            }

            #GROUP1709.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1715 {
                width: 371.505px;
                height: 252.454px;
                top: 167.086px;
                left: 24.2475px;
            }

            #IMAGE1803 {
                width: 420px;
                height: 243.225px;
                top: 335.519px;
                left: 0px;
            }

            #IMAGE1803 > .ladi-image > .ladi-image-background {
                width: 539.067px;
                height: 303.225px;
                top: -60.0002px;
                left: -61px;
                background-image: url("{{ asset('/img/anh4.jpg') }}");
            }

            #BOX1804 {
                width: 677.898px;
                height: 396.397px;
                top: 531.284px;
                left: -145.521px;
            }

            #BOX1804 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(72px);
            }

            #IMAGE1805 {
                width: 400px;
                height: 200px;
                top: 536.681px;
                left: -130px;
                mix-blend-mode: screen;
                will-change: transform, opacity;
            }

            #IMAGE1805 > .ladi-image > .ladi-image-background {
                width: 400px;
                height: 200px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh6.png')}});
            }

            #HEADLINE1807 {
                width: 393px;
                top: 29px;
                left: 0px;
            }

            #HEADLINE1807 > .ladi-headline {
                font-family: "SVN-Janelotus.otf";
                color: rgb(238, 202, 102);
                font-size: 56px;
                line-height: 1.6;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
            }

            #HEADLINE1809 {
                width: 230px;
                top: 0px;
                left: 42px;
            }

            #HEADLINE1809 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                text-transform: uppercase;
                text-align: left;
                letter-spacing: 1px;
                line-height: 1.8;
            }

            #HEADLINE1810 {
                width: 395px;
                top: 84.681px;
                left: -484.5px;
                display: none !important;
            }

            #HEADLINE1810 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 38px;
                text-align: center;
                line-height: 1.2;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE1810.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1811 {
                width: 336px;
                top: 5.6071px;
                left: 5.9243px;
            }

            #HEADLINE1811 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 0px;
                line-height: 1.6;
            }

            #BOX1812 {
                width: 352.892px;
                height: 47.2142px;
                top: 0px;
                left: 0px;
            }

            #BOX1812 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(148deg, #d40e6d, #f8a815);
                background: linear-gradient(148deg, #d40e6d, #f8a815);
                border-radius: 267px;
            }

            #GROUP1813 {
                width: 352.892px;
                height: 47.2142px;
                top: 182.681px;
                left: 34.8263px;
            }

            #GROUP1813.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1814 {
                width: 164px;
                top: 0px;
                left: 1px;
            }

            #HEADLINE1814 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1815 {
                width: 215px;
                top: 36px;
                left: 0px;
            }

            #HEADLINE1815 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(228deg, #d40e6d, #f8a815);
                background: linear-gradient(228deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 34px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1815 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1820 {
                width: 199px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1820 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #HEADLINE1822 {
                width: 204px;
                top: 9px;
                left: 0px;
            }

            #HEADLINE1822 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(245deg, #d40e6d, #f8a815);
                background: linear-gradient(245deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 43px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1822 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1823 {
                width: 199px;
                top: 65px;
                left: 0px;
            }

            #HEADLINE1823 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 13px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1825 {
                width: 156px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1825 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1826 {
                width: 225px;
                top: 19.5px;
                left: 0px;
            }

            #HEADLINE1826 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(237deg, #d40e6d, #f8a815);
                background: linear-gradient(237deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 20px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1826 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1828 {
                width: 120px;
                top: 51.5px;
                left: 0px;
            }

            #HEADLINE1828 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1829 {
                width: 133px;
                top: 2px;
                left: 0px;
            }

            #HEADLINE1829 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1830 {
                width: 143px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1830 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(230deg, #d40e6d, #f8a815);
                background: linear-gradient(230deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 62px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1830 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1831 {
                width: 113px;
                top: 76px;
                left: 2px;
            }

            #HEADLINE1831 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 13px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1832 {
                width: 165px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1832 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1833 {
                width: 105px;
                top: 3px;
                left: 0px;
            }

            #HEADLINE1833 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(303deg, #d40e6d, #f8a815);
                background: linear-gradient(303deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 54px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1833 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1834 {
                width: 183px;
                top: 70px;
                left: 0px;
            }

            #HEADLINE1834 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1835 {
                width: 165px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1835 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.4;
            }

            #HEADLINE1836 {
                width: 237px;
                top: 19px;
                left: 0px;
            }

            #HEADLINE1836 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(220deg, #d40e6d, #f8a815);
                background: linear-gradient(220deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 32px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE1836 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1838 {
                width: 165px;
                top: 67px;
                left: 0px;
            }

            #HEADLINE1838 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #GROUP1839 {
                width: 215px;
                height: 90px;
                top: 11.25px;
                left: 824px;
            }

            #GROUP1840 {
                width: 204px;
                height: 86px;
                top: 8.5px;
                left: 1029px;
            }

            #GROUP1841 {
                width: 225px;
                height: 73.5px;
                top: 16.25px;
                left: 399px;
            }

            #GROUP1842 {
                width: 143px;
                height: 118px;
                top: 0px;
                left: 0px;
            }

            #GROUP1842.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1843 {
                width: 183px;
                height: 115px;
                top: 1.25px;
                left: 168.52px;
            }

            #GROUP1843.ladi-animation > .ladi-group {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP1844 {
                width: 237px;
                height: 88px;
                top: 11.5px;
                left: 607.52px;
            }

            #LINE1846 {
                height: 99px;
                top: 17.0608px;
                left: 0px;
            }

            #LINE1846 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1846 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1847 {
                height: 82px;
                top: 13.1799px;
                left: 438.228px;
            }

            #LINE1847 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1847 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1848 {
                height: 99px;
                top: 4.6799px;
                left: 864px;
            }

            #LINE1848 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1848 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1849 {
                height: 99px;
                top: 0px;
                left: 651px;
                display: none !important;
            }

            #LINE1849 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1849 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #LINE1850 {
                height: 99px;
                top: 0px;
                left: 651px;
                display: none !important;
            }

            #LINE1850 > .ladi-line > .ladi-line-container {
                border-top: 0px !important;
                border-right: 2px solid rgb(255, 255, 255);
                border-bottom: 2px solid rgb(255, 255, 255);
                border-left: 2px solid rgb(255, 255, 255);
            }

            #LINE1850 > .ladi-line {
                height: 100%;
                padding: 0px 8px;
            }

            #CAROUSEL1853 {
                width: 420px;
                height: 154px;
                top: 635.181px;
                left: 1.2723px;
            }

            #CAROUSEL1853 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #PARAGRAPH1861 {
                width: 373px;
                top: 130.245px;
                left: 21.428px;
            }

            #PARAGRAPH1861 > .ladi-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #PARAGRAPH1861.ladi-animation > .ladi-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE1872 {
                width: 375px;
                top: 50px;
                left: 164px;
            }

            #HEADLINE1872 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(87deg, #d40e6d, #f8a815);
                background: linear-gradient(87deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 17px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #HEADLINE1872 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE1873 {
                width: 327px;
                top: 0px;
                left: 166px;
            }

            #HEADLINE1873 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 15px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #LINE1874 {
                width: 401px;
                top: 93px;
                left: 0px;
            }

            #LINE1874 > .ladi-line > .ladi-line-container {
                border-top: 3px solid rgb(212, 14, 110);
                border-right: 3px solid rgb(212, 14, 110);
                border-bottom: 3px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1874 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #BOX1875 {
                width: 397.5px;
                height: 227.9px;
                top: 0px;
                left: 0px;
            }

            #BOX1875 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(290deg, #d40e6d, #f8a815);
                background: linear-gradient(290deg, #d40e6d, #f8a815);
                box-shadow: 0px 18px 31px -9px rgba(0, 0, 0, 0.7);
                -webkit-box-shadow: 0px 18px 31px -9px rgba(0, 0, 0, 0.7);
                border-radius: 7px;
            }

            #VIDEO1876 {
                width: 388.666px;
                height: 218.625px;
                top: 4.30625px;
                left: 4.6375px;
            }

            #VIDEO1876 > .ladi-video > .ladi-video-background {
                background-size: cover;
                background-attachment: scroll;
                background-origin: content-box;
                background-image: url({{asset('img/ee83f6ced6151a4b4304-20220220193729.jpg')}});
                background-position: center center;
                background-repeat: no-repeat;
            }

            #SHAPE1876 {
                width: 60px;
                height: 60px;
                top: 79.3125px;
                left: 164.333px;
            }

            #SHAPE1876 svg:last-child {
                fill: rgba(0, 0, 0, 0.5);
            }

            #GROUP1877 {
                width: 397.5px;
                height: 227.9px;
                top: -112px;
                left: 11.25px;
            }

            #GROUP1877.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1880 {
                width: 217px;
                height: 139.237px;
                top: 1045.93px;
                left: 0px;
            }

            #IMAGE1880 > .ladi-image > .ladi-image-background {
                width: 247.647px;
                height: 139.237px;
                top: 0px;
                left: -8px;
                background-image: url({{asset('img/1zCegEZRFQzGMlkZPYphFe-Afxdh_kkyRaKPZsUKI.png')}});
            }

            #IMAGE1880 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1880.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1880:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE1881 {
                width: 419.693px;
                height: 284.414px;
                top: -4.4px;
                left: 0px;
            }

            #IMAGE1881 > .ladi-image > .ladi-image-background {
                width: 546.788px;
                height: 284.414px;
                top: 0.00028px;
                left: -62px;
                background-image: url({{asset('img/1CGIQHq7RcQusv25_bpq-Iis1LnA1D4YD_6Sv82qh.png')}});
            }

            #IMAGE1881 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE1881.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1881:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #SECTION1878 {
                height: 1197.4px;
            }

            #SECTION1878 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1878 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE1898 {
                width: 202.374px;
                height: 139.237px;
                top: 1045.93px;
                left: 217px;
            }

            #IMAGE1898 > .ladi-image > .ladi-image-background {
                width: 247.647px;
                height: 139.237px;
                top: 0px;
                left: -7px;
                background-image: url({{asset('img/1exnoD7cAmfq_5c9zWm8T9Ip0mSoNAFNMZmi8dww6.png')}});
            }

            #IMAGE1898.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1898:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #CAROUSEL1900 {
                width: 420px;
                height: 595px;
                top: 444.93px;
                left: -0.626px;
            }

            #CAROUSEL1900 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION1906 {
                height: 1986.59px;
            }

            #SECTION1906 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION1906 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #HEADLINE1938 {
                width: 120px;
                top: 0px;
                left: 1028px;
            }

            #HEADLINE1938 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(97deg, #d40e6d, #f8a815);
                background: linear-gradient(97deg, #d40e6d, #f8a815);
                color: rgba(0, 0, 0, 0.4);
                font-size: 87px;
                line-height: 1.6;
            }

            #HEADLINE1938 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP1939 {
                width: 1061px;
                height: 17px;
                top: 70.65px;
                left: 0px;
            }

            #BOX1940 {
                width: 5px;
                height: 5px;
                top: 6.5px;
                left: 1056px;
            }

            #BOX1940 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE1941 {
                width: 1061px;
                top: 0px;
                left: 0px;
            }

            #LINE1941 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1941 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #HEADLINE1943 {
                width: 377px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1943 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(156deg, #d40e6d, #f8a815);
                background: linear-gradient(156deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 20px;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE1943 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH1944 {
                width: 396px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH1944 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1944.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1944 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1944 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE1968 {
                width: 107px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE1968 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(93deg, #d40e6d, #f8a815);
                background: linear-gradient(93deg, #d40e6d, #f8a815);
                color: rgba(1, 38, 95, 0.6);
                font-size: 87px;
                line-height: 1.6;
            }

            #HEADLINE1968 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #BOX1970 {
                width: 7.7321px;
                height: 5px;
                top: 6.5px;
                left: 0px;
            }

            #BOX1970 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE1971 {
                width: 1166px;
                top: 0px;
                left: 0px;
            }

            #LINE1971 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE1971 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP1969 {
                width: 1166px;
                height: 17px;
                top: 70.45px;
                left: 25px;
            }

            #HEADLINE1973 {
                width: 283px;
                top: 13.45px;
                left: 104px;
            }

            #HEADLINE1973 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(141deg, #d40e6d, #f8a815);
                background: linear-gradient(141deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 22px;
                text-transform: uppercase;
                line-height: 1.4;
            }

            #HEADLINE1973 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH1976 {
                width: 383px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH1976 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1976 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1976 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1977 {
                width: 388px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH1977 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1977.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1977 ul li {
                padding-bottom: 2px;
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1977 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1980 {
                width: 377px;
                top: 100px;
                left: 0px;
            }

            #LIST_PARAGRAPH1980 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1980.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH1980 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1980 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH1981 {
                width: 360px;
                top: 78px;
                left: 0px;
            }

            #LIST_PARAGRAPH1981 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH1981 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH1981 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE1985 {
                width: 377.75px;
                height: 240.668px;
                top: 4.914px;
                left: 23.167px;
            }

            #IMAGE1985 > .ladi-image > .ladi-image-background {
                width: 377.75px;
                height: 240.668px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anhbia-20220221115723.jpg')}});
            }

            #IMAGE1985 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1985.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE1986 {
                width: 380px;
                height: 242.336px;
                top: 4.914px;
                left: 439px;
            }

            #IMAGE1986 > .ladi-image > .ladi-image-background {
                width: 380px;
                height: 267px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/san-bay-phan-thiet-hon-10-20210425154826.jpg')}});
            }

            #IMAGE1986 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE1986.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE1992 {
                width: 367.917px;
                height: 40.8353px;
                top: 0px;
                left: 0px;
            }

            #SHAPE1992 svg:last-child {
                fill: url("#SHAPE1992_desktop_gradient");
            }

            #PARAGRAPH1995 {
                width: 328px;
                top: 9.41765px;
                left: 30.1401px;
            }

            #PARAGRAPH1995 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 13px;
                line-height: 1.6;
            }

            #GROUP1996 {
                width: 367.917px;
                height: 40.8353px;
                top: 22.582px;
                left: 25.209px;
            }

            #CAROUSEL2006 {
                width: 420px;
                height: 263px;
                top: 1417.35px;
                left: 3.5px;
            }

            #CAROUSEL2006 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2029 {
                width: 400px;
                height: 616.889px;
                top: 779.4px;
                left: 10.8325px;
            }

            #BOX2029 > .ladi-box {
                background-color: rgba(1, 38, 95, 0);
                border-style: solid;
                border-color: rgba(1, 38, 95, 0.4);
                border-width: 3px;
                border-radius: 21px;
            }

            #LIST_PARAGRAPH2031 {
                width: 354px;
                top: 152px;
                left: 14.5px;
            }

            #LIST_PARAGRAPH2031 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2031 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2031 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #PARAGRAPH2032 {
                width: 383px;
                top: 0px;
                left: 3px;
            }

            #PARAGRAPH2032 > .ladi-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #PARAGRAPH2032.ladi-animation > .ladi-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2033 {
                width: 378px;
                top: 125px;
                left: 0px;
            }

            #LIST_PARAGRAPH2033 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2033.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2033 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2033 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2034 {
                width: 378px;
                top: 247px;
                left: 0px;
            }

            #LIST_PARAGRAPH2034 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2034.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2034 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2034 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2057 {
                width: 358.867px;
                height: 260.172px;
                top: 5.75px;
                left: 30.5665px;
            }

            #IMAGE2057 > .ladi-image > .ladi-image-background {
                width: 404.642px;
                height: 260.172px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/f0f2ff2cd1f71da944e6-20220221120313.jpg')}});
            }

            #IMAGE2057 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2062 {
                width: 365.418px;
                height: 260.172px;
                top: 269.828px;
                left: 450px;
            }

            #IMAGE2062 > .ladi-image > .ladi-image-background {
                width: 529.387px;
                height: 297.118px;
                top: 0px;
                left: -18.1586px;
                background-image: url({{asset('img/100529baoxaydung_image001-20210425161532.jpg')}});
            }

            #IMAGE2062 > .ladi-image {
                border-radius: 5px;
            }

            #CAROUSEL2054 {
                width: 420px;
                height: 544px;
                top: 692px;
                left: 0px;
            }

            #CAROUSEL2054 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2087 {
                width: 420px;
                height: 459.57px;
                top: 1246.5px;
                left: 0px;
            }

            #BOX2087 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #LIST_PARAGRAPH2092 {
                width: 346px;
                top: 65.85px;
                left: 4px;
            }

            #LIST_PARAGRAPH2092 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2092 ul li {
                padding-bottom: 3px;
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2092 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(249%2C%20187%2C%200%2C%201)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #BOX2094 {
                width: 394px;
                height: 678.667px;
                top: 1272.07px;
                left: 12px;
            }

            #BOX2094 > .ladi-box {
                background-color: rgba(255, 255, 255, 0);
                border-style: solid;
                border-color: rgb(255, 255, 255);
                border-width: 3px;
                border-radius: 25px;
            }

            #HEADLINE2101 {
                width: 119px;
                top: 0px;
                left: 1172.5px;
            }

            #HEADLINE2101 > .ladi-headline {
                font-family: "Montserrat", sans-serif;
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgba(0, 0, 0, 0.4);
                font-size: 87px;
                line-height: 1.6;
            }

            #HEADLINE2101 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #BOX2103 {
                width: 7.7321px;
                height: 5px;
                top: 6.5px;
                left: 1198px;
            }

            #BOX2103 > .ladi-box {
                background-color: rgb(27, 27, 27);
                border-radius: 373px;
            }

            #LINE2104 {
                width: 1200px;
                top: 0px;
                left: 0px;
            }

            #LINE2104 > .ladi-line > .ladi-line-container {
                border-top: 1px solid rgb(212, 14, 110);
                border-right: 1px solid rgb(212, 14, 110);
                border-bottom: 1px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE2104 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2102 {
                width: 1205.73px;
                height: 17px;
                top: 65px;
                left: 0px;
            }

            #HEADLINE2105 {
                width: 380px;
                top: 111px;
                left: 1034.5px;
            }

            #HEADLINE2105 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(146deg, #d40e6d, #f8a815);
                background: linear-gradient(146deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 18px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2105 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2108 {
                width: 363px;
                top: 0px;
                left: 3px;
            }

            #LIST_PARAGRAPH2108 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2108 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2108 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2116 {
                width: 420px;
                height: 235.179px;
                top: 2.332px;
                left: 1px;
            }

            #IMAGE2116 > .ladi-image > .ladi-image-background {
                width: 420px;
                height: 235.179px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh8.png')}});
            }

            #IMAGE2116 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 8px;
            }

            #IMAGE2116:hover > .ladi-image {
                transform: scale(1.05);
                -webkit-transform: scale(1.05);
            }

            #CAROUSEL2113 {
                width: 420px;
                height: 261px;
                top: 373px;
                left: -1px;
            }

            #CAROUSEL2113 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION2095 {
                height: 636px;
            }

            #SECTION2095 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #SECTION2176 {
                height: 1069.22px;
            }

            #SECTION2176 > .ladi-section-background {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{asset('img/anh5.jpg')}});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.92;
            }

            #SECTION2176 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2177 {
                width: 472px;
                height: 336.022px;
                top: 85.022px;
                left: 507px;
            }

            #BOX2177 > .ladi-box {
                background-color: rgba(255, 255, 255, 0.8);
                filter: blur(24px);
            }

            #IMAGE2178 {
                width: 388px;
                height: 341.348px;
                top: 714.044px;
                left: 17.5025px;
            }

            #IMAGE2178 > .ladi-image > .ladi-image-background {
                width: 388px;
                height: 341.348px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/e167158b3750fb0ea241-20220221122757.jpg')}});
            }

            #IMAGE2178 > .ladi-image {
                border-radius: 2px;
            }

            #IMAGE2178.ladi-animation > .ladi-image {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.3s;
                -webkit-animation-delay: 0.3s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2179 {
                width: 411.66px;
                height: 939.144px;
                top: 23.7328px;
                left: 2.51204px;
            }

            #BOX2179 > .ladi-box {
                background-color: rgb(255, 255, 255);
                border-radius: 20px;
            }

            #HEADLINE2182 {
                width: 381px;
                top: 44.022px;
                left: 19.5px;
            }

            #HEADLINE2182 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(471deg, #d40e6d, #f8a815);
                background: linear-gradient(471deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 23px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 0px;
                line-height: 1.4;
            }

            #HEADLINE2182.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2182 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2183 {
                width: 370px;
                height: 584px;
                top: 115.022px;
                left: 30px;
            }

            #GROUP2183.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2184 {
                width: 347px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2184 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2184.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2184 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2184 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 37px;
                top: -20px;
            }

            #LIST_PARAGRAPH2185 {
                width: 327px;
                top: 243px;
                left: 0px;
            }

            #LIST_PARAGRAPH2185 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2185.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2185 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2185 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 40px;
                top: -20px;
            }

            #LIST_PARAGRAPH2186 {
                width: 370px;
                top: 416px;
                left: 0px;
            }

            #LIST_PARAGRAPH2186 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2186.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2186 ul li {
                padding-left: 20px;
            }

            #LIST_PARAGRAPH2186 ul li:before {
                content: counter(linum, disc);
                color: #d40e6d;
                font-size: 40px;
                top: -20px;
            }

            #BOX2213 {
                width: 652px;
                height: 614.215px;
                top: 0.002px;
                left: -63px;
            }

            #BOX2213 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #SECTION2243 {
                height: 270.287px;
            }

            #SECTION2243 > .ladi-overlay {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2243 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2243 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #GROUP2266 {
                width: 390.752px;
                height: 143.88px;
                top: 103.12px;
                left: 9.2475px;
            }

            #HEADLINE2267 {
                width: 357px;
                top: 0px;
                left: 33.7525px;
            }

            #HEADLINE2267 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(118deg, #d40e6d, #f8a815);
                background: linear-gradient(118deg, #d40e6d, #f8a815);
                color: rgb(175, 22, 90);
                font-size: 31px;
                font-weight: bold;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE2267 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2268 {
                width: 325px;
                height: 22.5469px;
                top: 94.786px;
                left: 0px;
            }

            #SHAPE2269 {
                width: 22.5469px;
                height: 22.5469px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2269 svg:last-child {
                fill: #d40e6d;
            }

            #HEADLINE2270 {
                width: 292px;
                top: 2px;
                left: 33px;
            }

            #HEADLINE2270 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 14px;
                text-align: left;
                line-height: 1.4;
            }

            #GROUP2271 {
                width: 325px;
                height: 22.5469px;
                top: 121.333px;
                left: 0px;
            }

            #SHAPE2272 {
                width: 22.5469px;
                height: 22.5469px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2272 svg:last-child {
                fill: #d40e6d;
            }

            #HEADLINE2273 {
                width: 292px;
                top: 2px;
                left: 33px;
            }

            #HEADLINE2273 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 14px;
                text-align: left;
                line-height: 1.4;
            }

            #HEADLINE2277 {
                width: 386px;
                top: 46px;
                left: 2px;
            }

            #HEADLINE2277 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: left;
                line-height: 1.4;
            }

            #BOX2279 {
                width: 416.995px;
                height: 990px;
                top: 0px;
                left: 0px;
            }

            #BOX2279 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(112deg, #d40e6d, #f8a815);
                background: linear-gradient(112deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 24px -15px #000;
                -webkit-box-shadow: 0px 15px 24px -15px #000;
                border-radius: 20px;
            }

            #IMAGE2280 {
                width: 1335.59px;
                height: 682.098px;
                top: 1px;
                left: 840.65px;
            }

            #IMAGE2280 > .ladi-image > .ladi-image-background {
                width: 1335.59px;
                height: 682.098px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/novaword-phan-thiet1-20220220193215.jpg') }});
            }

            #IMAGE2281 {
                width: 416.52px;
                height: 288.322px;
                top: 292.6px;
                left: 4.106px;
            }

            #IMAGE2281 > .ladi-image > .ladi-image-background {
                width: 416.52px;
                height: 295.489px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/a70a002c20f7eca9b5e6-20220221131716.jpg')}});
            }

            #IMAGE2281 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2281.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2281:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2282 {
                width: 416.765px;
                height: 288.322px;
                top: 292.6px;
                left: 422.861px;
            }

            #IMAGE2282 > .ladi-image > .ladi-image-background {
                width: 486.743px;
                height: 288.322px;
                top: 0px;
                left: -29px;
                background-image: url({{asset('img/a2d6e372c3a90ff756b8-20220221131710.jpg')}});
            }

            #IMAGE2282 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2282.ladi-animation > .ladi-image {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2282:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2283 {
                width: 416.576px;
                height: 279.122px;
                top: 0.8px;
                left: 422.861px;
            }

            #IMAGE2283 > .ladi-image > .ladi-image-background {
                width: 496.217px;
                height: 279.122px;
                top: 0px;
                left: -44px;
                background-image: url({{asset('img/a4a41dd33f08f356aa19-20220221131716.jpg')}});
            }

            #IMAGE2283 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2283.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2283:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2284 {
                width: 415.254px;
                height: 281px;
                top: 0.8px;
                left: 1264.32px;
            }

            #IMAGE2284 > .ladi-image > .ladi-image-background {
                width: 499.786px;
                height: 281px;
                top: 0px;
                left: -11px;
                background-image: url({{asset('img/e9c4bec290195c470508-20220221131716.jpg')}});
            }

            #IMAGE2284 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2284.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2284:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #IMAGE2285 {
                width: 417.827px;
                height: 288.322px;
                top: 292.6px;
                left: 843.061px;
            }

            #IMAGE2285 > .ladi-image > .ladi-image-background {
                width: 512.809px;
                height: 288.322px;
                top: 0px;
                left: -33px;
                background-image: url({{asset('img/40000bcc2417e849b106-20220221131710.jpg')}});
            }

            #IMAGE2285 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2285.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2285:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #CAROUSEL2299 {
                width: 420px;
                height: 633px;
                top: 614.217px;
                left: 0.9665px;
            }

            #CAROUSEL2299 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2305 {
                width: 861px;
                height: 503.158px;
                top: 73.4194px;
                left: -460.268px;
            }

            #IMAGE2305 > .ladi-image > .ladi-image-background {
                width: 910.272px;
                height: 503.158px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/mat-bang-shophouse-6x22-ocean-residence-novaworld-phan-thiet-binh-thuan-20220221124019.jpg')}});
            }

            #IMAGE2307 {
                width: 823.189px;
                height: 534.032px;
                top: 73.4194px;
                left: 430.223px;
            }

            #IMAGE2307 > .ladi-image > .ladi-image-background {
                width: 823.189px;
                height: 588.802px;
                top: -54.7702px;
                left: 0px;
                background-image: url({{asset('img/20220128105602-6d98_wm-20220221125332.jpg')}});
            }

            #BUTTON_TEXT2320 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2320 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2320 {
                width: 189.059px;
                height: 51px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2320 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2320 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2322 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2322 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2322 {
                width: 189.059px;
                height: 51px;
                top: 0px;
                left: 200.874px;
            }

            #BUTTON2322 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2322 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2324 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2324 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2324 {
                width: 189.059px;
                height: 51px;
                top: 69px;
                left: 0px;
            }

            #BUTTON2324 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2324 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_GROUP2319 {
                width: 389.933px;
                height: 120px;
                top: 599.229px;
                left: -557px;
                display: none !important;
            }

            #BUTTON_GROUP2319.ladi-animation > .ladi-button-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2349 {
                width: 396px;
                height: 295px;
                top: 146.5px;
                left: 0px;
            }

            #GROUP2350 {
                width: 396px;
                height: 441.5px;
                top: 226px;
                left: 18px;
            }

            #GROUP2350.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2425 {
                width: 1498.72px;
                height: 472.638px;
                top: 9.1041px;
                left: 164px;
            }

            #BOX2425 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(72px);
            }

            #LINE2426 {
                width: 173px;
                top: 100px;
                left: 461.297px;
            }

            #LINE2426 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(212, 14, 110);
                border-right: 2px solid rgb(212, 14, 110);
                border-bottom: 2px solid rgb(212, 14, 110);
                border-left: 0px !important;
            }

            #LINE2426 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #HEADLINE2432 {
                width: 355px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2432 > .ladi-headline {
                font-family: "ITCEDSCR.TTF";
                background: #d40e6d;
                background: -webkit-linear-gradient(106deg, #d40e6d, #f8a815);
                background: linear-gradient(106deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 115px;
                line-height: 1.6;
            }

            #HEADLINE2432 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2434 {
                width: 278px;
                top: 125.6px;
                left: 118px;
            }

            #HEADLINE2434 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #SHAPE2437 {
                width: 1284.4px;
                height: 52.324px;
                top: -29px;
                left: -456px;
            }

            #SHAPE2437 > .ladi-shape {
                transform: rotate(180deg);
                -webkit-transform: rotate(180deg);
            }

            #SHAPE2437 svg:last-child {
                fill: #00255F;
            }

            #HEADLINE2438 {
                width: 102px;
                top: 14.45px;
                left: 3px;
            }

            #HEADLINE2438 > .ladi-headline {
                background: #f8a815;
                background: -webkit-linear-gradient(24deg, #f8a815, #d40e6d);
                background: linear-gradient(24deg, #f8a815, #d40e6d);
                color: rgb(0, 0, 0);
                font-size: 16px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 5px;
                line-height: 1.4;
            }

            #HEADLINE2438 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2439 {
                width: 356px;
                top: 86px;
                left: 0px;
            }

            #LIST_PARAGRAPH2439 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #LIST_PARAGRAPH2439 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2439 ul li:before {
                content: counter(linum, none);
                color: rgba(84, 84, 84, 1.0);
                font-size: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2440 {
                width: 375px;
                top: 1370.35px;
                left: 14.5px;
            }

            #LIST_PARAGRAPH2440 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 13px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2440.ladi-animation > .ladi-list-paragraph {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LIST_PARAGRAPH2440 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2440 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2441 {
                width: 420px;
                height: 381.53px;
                top: 1040.28px;
                left: 0px;
            }

            #IMAGE2441 > .ladi-image > .ladi-overlay {
                background-size: cover;
                background-attachment: scroll;
                background-origin: content-box;
                background-image: url({{asset("img/novaworld-phan-thiet-20220220193953.jpg")}});
                background-position: center bottom;
                background-repeat: no-repeat;
            }

            #IMAGE2441 > .ladi-image > .ladi-image-background {
                width: 420px;
                height: 381.53px;
                top: 0px;
                left: 0px;
                background-image: url({{asset("img/novaworld-phan-thiet-20220220193953.jpg")}});
            }

            #BOX2442 {
                width: 624px;
                height: 370.706px;
                top: 1347.65px;
                left: -70px;
            }

            #BOX2442 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 37px;
            }

            #HEADLINE2443 {
                width: 135px;
                top: 37.5px;
                left: 893px;
            }

            #HEADLINE2443 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(157deg, #d40e6d, #f8a815);
                background: linear-gradient(157deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 31px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 3px;
                line-height: 1.4;
            }

            #HEADLINE2443 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2444 {
                width: 355px;
                top: 96px;
                left: 0px;
            }

            #HEADLINE2444 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 13px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2447 {
                width: 364px;
                top: 282.85px;
                left: 0px;
            }

            #LIST_PARAGRAPH2447 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2447 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2447 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE2448 {
                width: 157px;
                top: 37.95px;
                left: 1040px;
            }

            #HEADLINE2448 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 27px;
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 3px;
                line-height: 1.4;
            }

            #HEADLINE2448 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #LIST_PARAGRAPH2449 {
                width: 369px;
                top: 81px;
                left: 0px;
            }

            #LIST_PARAGRAPH2449 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2449 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2449 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #HEADLINE2454 {
                width: 371px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2454 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(149deg, #d40e6d, #f8a815);
                background: linear-gradient(149deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 19px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE2454 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2455 {
                width: 325px;
                top: 91px;
                left: 23px;
            }

            #HEADLINE2455 > .ladi-headline {
                color: rgb(0, 0, 0);
                font-size: 13px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP2453 {
                width: 371px;
                height: 153px;
                top: 0px;
                left: 0px;
            }

            #GROUP2453.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2456 {
                width: 250px;
                top: 153px;
                left: 60.4997px;
            }

            #LINE2456 > .ladi-line > .ladi-line-container {
                border-top: 3px solid rgb(212, 14, 109);
                border-right: 3px solid rgb(212, 14, 109);
                border-bottom: 3px solid rgb(212, 14, 109);
                border-left: 0px !important;
            }

            #LINE2456 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #LIST_PARAGRAPH2459 {
                width: 367px;
                top: 196px;
                left: 0px;
            }

            #LIST_PARAGRAPH2459 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 16px;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2459 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2459 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20enable-background%3D%22new%200%200%20100%20100%22%20xml%3Aspace%3D%22preserve%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22rgba(212%2C%2014%2C%20110%2C%201.0)%22%3E%3Cpath%20d%3D%22M59.999%2C55.001v15l20-20c0%2C0-10-10-20-20v15h-40v10H59.999z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                width: 42px;
                height: 42px;
                top: -7px;
            }

            #GROUP2460 {
                width: 416.995px;
                height: 990px;
                top: 0px;
                left: 3.005px;
            }

            #GROUP2242 {
                width: 394px;
                height: 376px;
                top: 484.326px;
                left: 9.2475px;
            }

            #SECTION2215 {
                height: 887.656px;
            }

            #SECTION2215 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2215 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #GROUP2229 {
                width: 365.505px;
                height: 252.454px;
                top: 212.086px;
                left: 25.2475px;
            }

            #GROUP2239 {
                width: 174.614px;
                height: 120.374px;
                top: 132.08px;
                left: 190.891px;
            }

            #GROUP2239.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2241 {
                width: 136px;
                top: 19.4772px;
                left: 19.307px;
            }

            #HEADLINE2241 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2240 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX2240 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2236 {
                width: 174.614px;
                height: 120.374px;
                top: 132.08px;
                left: 0px;
            }

            #GROUP2236.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.9s;
                -webkit-animation-duration: 1.9s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2238 {
                width: 147px;
                top: 25.2249px;
                left: 13.7581px;
            }

            #HEADLINE2238 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2237 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX2237 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2233 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 190.891px;
            }

            #GROUP2233.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2235 {
                width: 161px;
                top: 19.4772px;
                left: 6.807px;
            }

            #HEADLINE2235 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2234 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX2234 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(180deg, #d40e6d, #f8a815);
                background: linear-gradient(180deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2230 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #GROUP2230.ladi-animation > .ladi-group {
                animation-name: bounceIn;
                -webkit-animation-name: bounceIn;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2232 {
                width: 132px;
                top: 19.4772px;
                left: 21.307px;
            }

            #HEADLINE2232 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2231 {
                width: 174.614px;
                height: 120.374px;
                top: 0px;
                left: 0px;
            }

            #BOX2231 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(184deg, #d40e6d, #f8a815);
                background: linear-gradient(184deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -18px #000;
                -webkit-box-shadow: 0px 15px 20px -18px #000;
                border-radius: 7px;
            }

            #GROUP2226 {
                width: 378px;
                height: 181px;
                top: 17.089px;
                left: 19px;
            }

            #GROUP2226.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2228 {
                width: 378px;
                top: 66px;
                left: 0px;
            }

            #HEADLINE2228 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 18px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.6;
            }

            #HEADLINE2228.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2227 {
                width: 378px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2227 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 11px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: left;
                line-height: 1.8;
            }

            #HEADLINE2227.ladi-animation > .ladi-headline {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #FORM2221 {
                width: 350px;
                height: 186px;
                top: 145.555px;
                left: 22px;
            }

            #FORM2221 > .ladi-form {
                color: rgb(0, 0, 0);
                font-size: 14px;
                letter-spacing: 0px;
                line-height: 1.6;
            }

            #FORM2221 .ladi-form-item .ladi-form-control::placeholder, #FORM2221 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: #000;
            }

            #FORM2221 .ladi-form-item {
                padding-left: 11px;
                padding-right: 11px;
            }

            #FORM2221 .ladi-form-item.ladi-form-checkbox {
                padding-left: 16px;
                padding-right: 16px;
            }

            #FORM2221 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20%23000%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM2221 .ladi-form-item-container, #FORM2221 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(162, 162, 162);
                border-width: 1px;
            }

            #FORM2221 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(162, 162, 162);
            }

            #FORM2221 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
            }

            #FORM_ITEM2225 {
                width: 350px;
                height: 51.8156px;
                top: 67.092px;
                left: 0px;
            }

            #FORM_ITEM2224 {
                width: 350px;
                height: 51.8156px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2222 {
                width: 350px;
                height: 51.8156px;
                top: 134.184px;
                left: 0px;
            }

            #BUTTON2222 > .ladi-button > .ladi-button-background {
                background: #FFED00;
                background: -webkit-linear-gradient(191deg, #FFED00, #FF0000);
                background: linear-gradient(191deg, #FFED00, #FF0000);
            }

            #BUTTON2222 > .ladi-button {
                box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                -webkit-box-shadow: 0px 15px 20px -15px rgba(68, 16, 16, 1.0);
                border-radius: 3px;
            }

            #BUTTON_TEXT2222 {
                width: 350px;
                top: 13.324px;
                left: 0px;
            }

            #BUTTON_TEXT2222 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #GROUP2218 {
                width: 394px;
                height: 79px;
                top: 50.986px;
                left: 0px;
            }

            #HEADLINE2220 {
                width: 394px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2220 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(132deg, #d40e6d, #f8a815);
                background: linear-gradient(132deg, #d40e6d, #f8a815);
                color: rgb(129, 15, 66);
                font-size: 28px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2220 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2219 {
                width: 304px;
                top: 37px;
                left: 41px;
            }

            #HEADLINE2219 > .ladi-headline {
                color: rgb(32, 32, 32);
                font-size: 15px;
                font-weight: bold;
                text-align: center;
                line-height: 1.4;
            }

            #BOX2217 {
                width: 390px;
                height: 376px;
                top: 0px;
                left: 4px;
            }

            #BOX2217 > .ladi-box {
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                background-color: rgb(255, 255, 255);
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #BOX2216 {
                width: 500px;
                height: 721.438px;
                top: 0px;
                left: -39px;
            }

            #BOX2216 > .ladi-box > .ladi-overlay {
                background-size: cover;
                background-attachment: fixed;
                background-image: url({{asset('img/0b8f0f48956863363a79-20220112050141.jpg')}});
                background-position: center center;
                background-repeat: repeat;
                opacity: 0.17;
            }

            #BOX2216 > .ladi-box {
                background-color: rgb(0, 37, 95);
                border-radius: 10px;
            }

            #IMAGE2461 {
                width: 358.867px;
                height: 260.172px;
                top: 269.828px;
                left: 30.5665px;
            }

            #IMAGE2461 > .ladi-image > .ladi-image-background {
                width: 404.642px;
                height: 260.172px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/novaworld-phan-thiet-0907750088-phoi-canh-6-20210425163509.jpg')}});
            }

            #IMAGE2461 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2462 {
                width: 365.418px;
                height: 260.172px;
                top: 5.75px;
                left: 450px;
            }

            #IMAGE2462 > .ladi-image > .ladi-image-background {
                width: 585.564px;
                height: 264.078px;
                top: 0px;
                left: -121.584px;
                background-image: url({{asset('img/novaworl-phan-thiet-4-20210425152455.jpg')}});
            }

            #IMAGE2462 > .ladi-image {
                border-radius: 5px;
            }

            #BOX2464 {
                width: 555px;
                height: 6.4px;
                top: 172.6px;
                left: 243.5px;
            }

            #BOX2464 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(134deg, #d40e6d, #f8a815);
                background: linear-gradient(134deg, #d40e6d, #f8a815);
                border-radius: 93px;
            }

            #HEADLINE2465 {
                width: 335px;
                top: 0px;
                left: 25px;
            }

            #HEADLINE2465 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(154deg, #d40e6d, #f8a815);
                background: linear-gradient(154deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 17px;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE2465 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #SHAPE2467 {
                width: 354px;
                height: 40.8353px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2467 svg:last-child {
                fill: url("#SHAPE2467_desktop_gradient");
            }

            #PARAGRAPH2468 {
                width: 247px;
                top: 9.41765px;
                left: 67px;
            }

            #PARAGRAPH2468 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 14px;
                line-height: 1.6;
            }

            #GROUP2466 {
                width: 354px;
                height: 40.8353px;
                top: 22.582px;
                left: 447px;
            }

            #IMAGE2469 {
                width: 378px;
                height: 242.336px;
                top: 3.08px;
                left: 861px;
            }

            #IMAGE2469 > .ladi-image > .ladi-image-background {
                width: 378px;
                height: 267px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/catalogue-gsw6-20210329084727.jpg')}});
            }

            #IMAGE2469 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2469.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE2471 {
                width: 354px;
                height: 40.8353px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2471 svg:last-child {
                fill: url("#SHAPE2471_desktop_gradient");
            }

            #PARAGRAPH2472 {
                width: 293px;
                top: 9.41765px;
                left: 31.5px;
            }

            #PARAGRAPH2472 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 14px;
                line-height: 1.6;
            }

            #GROUP2470 {
                width: 354px;
                height: 40.8353px;
                top: 22.582px;
                left: 878px;
            }

            #IMAGE2473 {
                width: 374px;
                height: 242.336px;
                top: 4.914px;
                left: 1284px;
            }

            #IMAGE2473 > .ladi-image > .ladi-image-background {
                width: 374px;
                height: 267px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/ttxxvnktvn-20220221115918.jpg')}});
            }

            #IMAGE2473 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2473.ladi-animation > .ladi-image {
                animation-name: bounceInUp;
                -webkit-animation-name: bounceInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SHAPE2475 {
                width: 354px;
                height: 40.8353px;
                top: 0px;
                left: 0px;
            }

            #SHAPE2475 svg:last-child {
                fill: url("#SHAPE2475_desktop_gradient");
            }

            #PARAGRAPH2476 {
                width: 265px;
                top: 8.41765px;
                left: 43px;
            }

            #PARAGRAPH2476 > .ladi-paragraph {
                color: rgb(255, 255, 255);
                font-size: 14px;
                line-height: 1.6;
            }

            #GROUP2474 {
                width: 354px;
                height: 40.8353px;
                top: 22.582px;
                left: 1293px;
            }

            #HEADLINE2477 {
                width: 360px;
                top: 0px;
                left: 4px;
            }

            #HEADLINE2477 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(120deg, #d40e6d, #f8a815);
                background: linear-gradient(120deg, #d40e6d, #f8a815);
                color: rgb(0, 0, 0);
                font-size: 19px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #HEADLINE2477 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #CAROUSEL2478 {
                width: 420px;
                height: 268px;
                top: 1706.07px;
                left: -1px;
            }

            #CAROUSEL2478 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2479 {
                width: 420px;
                height: 268px;
                top: 0px;
                left: 1px;
            }

            #IMAGE2479 > .ladi-image > .ladi-image-background {
                width: 420px;
                height: 268px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/c358a65c858749d91096-20220221121613.jpg')}});
            }

            #BOX2484 {
                width: 400px;
                height: 409.326px;
                top: 434px;
                left: 11px;
            }

            #BOX2484 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(105deg, #d40e6d, #f8a815);
                background: linear-gradient(105deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #LIST_PARAGRAPH2486 {
                width: 363px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2486 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2486 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2486 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2487 {
                width: 363px;
                top: 129px;
                left: 3px;
            }

            #LIST_PARAGRAPH2487 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2487 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2487 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2488 {
                width: 391px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2488 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: left;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2488 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2488 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2489 {
                width: 380px;
                top: 96px;
                left: 0px;
            }

            #LIST_PARAGRAPH2489 > .ladi-list-paragraph {
                color: rgb(0, 0, 0);
                font-size: 15px;
                text-align: left;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2489 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2489 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #IMAGE2492 {
                width: 360.012px;
                height: 260.172px;
                top: 269.828px;
                left: 872.789px;
            }

            #IMAGE2492 > .ladi-image > .ladi-image-background {
                width: 529.385px;
                height: 297.118px;
                top: 0px;
                left: -18.1586px;
                background-image: url({{asset('img/pho-am-thuc-600x400-20210425163539.jpg')}});
            }

            #IMAGE2492 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2493 {
                width: 360.013px;
                height: 260.172px;
                top: 5.75px;
                left: 872.789px;
            }

            #IMAGE2493 > .ladi-image > .ladi-image-background {
                width: 576.903px;
                height: 260.172px;
                top: 0px;
                left: -119.786px;
                background-image: url({{asset('img/8-1-20220221120818.jpg')}});
            }

            #IMAGE2493 > .ladi-image {
                border-radius: 5px;
            }

            #IMAGE2494 {
                width: 420px;
                height: 303px;
                top: 0px;
                left: 421px;
            }

            #IMAGE2494 > .ladi-image > .ladi-image-background {
                width: 455.836px;
                height: 303px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/e4be2b51088ac4d49d9b-20220221121613.jpg')}});
            }

            #IMAGE2495 {
                width: 438.783px;
                height: 291.665px;
                top: 0px;
                left: 841px;
            }

            #IMAGE2495 > .ladi-image > .ladi-image-background {
                width: 438.783px;
                height: 291.665px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/693080fca3276f793636-20220221121613.jpg')}});
            }

            #IMAGE2496 {
                width: 419.665px;
                height: 290.561px;
                top: 474.824px;
                left: 1px;
            }

            #IMAGE2496 > .ladi-image > .ladi-image-background {
                width: 419.665px;
                height: 290.561px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh3.jpg')}});
            }

            #IMAGE2496 > .ladi-image {
                border-radius: 19px;
            }

            #IMAGE2497 {
                width: 832.42px;
                height: 471.958px;
                top: 73.4194px;
                left: 1263.61px;
            }

            #IMAGE2497 > .ladi-image > .ladi-image-background {
                width: 875.42px;
                height: 499.549px;
                top: -27.5907px;
                left: -43px;
                background-image: url({{asset('img/mat-bang-ban-ve-nha-pho-55x20-ocean-residence-novaworld-phan-thiet-binh-thuan-20220221125523.jpg')}});
            }

            #HEADLINE2306 {
                width: 380px;
                top: 12.4194px;
                left: 60.1px;
            }

            #HEADLINE2306 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 27px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2498 {
                width: 381px;
                top: 17.4194px;
                left: 447.1px;
            }

            #HEADLINE2498 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 27px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2499 {
                width: 438px;
                top: 17.4194px;
                left: 1288.03px;
            }

            #HEADLINE2499 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 25px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #IMAGE2500 {
                width: 417.31px;
                height: 280.6px;
                top: 0.8px;
                left: 843.32px;
            }

            #IMAGE2500 > .ladi-image > .ladi-image-background {
                width: 499.075px;
                height: 280.6px;
                top: 0px;
                left: -35px;
                background-image: url({{asset('img/00ca9147be9c72c22b8d-20220221131709.jpg')}});
            }

            #IMAGE2500 > .ladi-image {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 7px;
            }

            #IMAGE2500.ladi-animation > .ladi-image {
                animation-name: fadeInRight;
                -webkit-animation-name: fadeInRight;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2500:hover > .ladi-image {
                transform: scale(1.1);
                -webkit-transform: scale(1.1);
            }

            #BOX2501 {
                width: 400px;
                height: 387.326px;
                top: 481px;
                left: 8px;
            }

            #BOX2501 > .ladi-box {
                background: #d40e6d;
                background: -webkit-linear-gradient(105deg, #d40e6d, #f8a815);
                background: linear-gradient(105deg, #d40e6d, #f8a815);
                box-shadow: 0px 15px 20px -16px #000;
                -webkit-box-shadow: 0px 15px 20px -16px #000;
                border-color: rgb(129, 15, 66);
                border-width: 7px;
                border-radius: 26px;
            }

            #IMAGE2502 {
                width: 280.667px;
                height: 87.946px;
                top: 6px;
                left: 65.914px;
            }

            #IMAGE2502 > .ladi-image > .ladi-image-background {
                width: 280.667px;
                height: 87.946px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/logo-2-20210425050751.png')}});
            }

            #GROUP2503 {
                width: 1233px;
                height: 118px;
                top: 16.875px;
                left: 43.5px;
            }

            #GROUP2504 {
                width: 882px;
                height: 116.061px;
                top: 9.1041px;
                left: 181.5px;
            }

            #GROUP2505 {
                width: 634.297px;
                height: 122px;
                top: 814.55px;
                left: -109.999px;
            }

            #GROUP2505.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2506 {
                width: 539px;
                height: 112px;
                top: 15.324px;
                left: -141.5px;
            }

            #GROUP2506.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2507 {
                width: 798.5px;
                height: 184px;
                top: 76.8px;
                left: 10px;
            }

            #GROUP2507.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2508 {
                width: 1191px;
                height: 139px;
                top: 26.269px;
                left: 12.5px;
            }

            #GROUP2508.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2509 {
                width: 383px;
                height: 150px;
                top: 0px;
                left: 0px;
            }

            #GROUP2509.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2510 {
                width: 388px;
                height: 172px;
                top: 152.5px;
                left: 3px;
            }

            #GROUP2511 {
                width: 391px;
                height: 324.5px;
                top: 134.824px;
                left: 10px;
            }

            #GROUP2512 {
                width: 368.5px;
                height: 224px;
                top: 801.28px;
                left: 17.5px;
            }

            #GROUP2512.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2513 {
                width: 377px;
                height: 138px;
                top: 106.65px;
                left: 751.5px;
            }

            #GROUP2514 {
                width: 1148px;
                height: 244.65px;
                top: -23px;
                left: -734px;
            }

            #GROUP2514.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2515 {
                width: 364px;
                height: 378.85px;
                top: 1291.74px;
                left: 19px;
            }

            #GROUP2515.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 2.2s;
                -webkit-animation-duration: 2.2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2516 {
                width: 1414.5px;
                height: 161px;
                top: 0px;
                left: 0px;
            }

            #GROUP2516.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2517 {
                width: 369px;
                height: 201px;
                top: 174px;
                left: 1027px;
            }

            #GROUP2517.ladi-animation > .ladi-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2518 {
                width: 1414.5px;
                height: 375px;
                top: -15px;
                left: -1007px;
            }

            #GROUP2519 {
                width: 642px;
                height: 124px;
                top: 25.089px;
                left: 30px;
            }

            #GROUP2519.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2520 {
                width: 366px;
                height: 273px;
                top: 116px;
                left: 15.0335px;
            }

            #GROUP2520.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2521 {
                width: 371px;
                height: 172px;
                top: 10.39px;
                left: 24.5px;
            }

            #GROUP2521.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2522 {
                width: 391px;
                height: 247px;
                top: 183.61px;
                left: 9.5px;
            }

            #GROUP2522.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2523 {
                width: 420px;
                top: 0px;
                left: 4px;
            }

            #HEADLINE2523 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 39px;
                text-align: center;
                letter-spacing: 3px;
                line-height: 1.2;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE2523.ladi-animation > .ladi-headline {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #HEADLINE2524 {
                width: 420px;
                top: 42px;
                left: 0px;
            }

            #HEADLINE2524 > .ladi-headline {
                font-family: "Cormorant Upright", serif;
                color: rgb(238, 202, 102);
                font-size: 31px;
                text-align: center;
                line-height: 1.2;
                text-shadow: rgb(199, 111, 22) 1px 1px 4px;
                -webkit-text-stroke: 0px rgb(249, 187, 0);
            }

            #HEADLINE2524.ladi-animation > .ladi-headline {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2525 {
                width: 2122.65px;
                height: 132px;
                top: -6.951px;
                left: -27px;
            }

            #BOX2525 > .ladi-box {
                background-color: rgb(0, 37, 95);
                filter: blur(25px);
            }

            #HEADLINE2526 {
                width: 364px;
                top: 17.4194px;
                left: 882px;
            }

            #HEADLINE2526 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 26px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #HEADLINE2527 {
                width: 363px;
                top: 13.9194px;
                left: 1705px;
            }

            #HEADLINE2527 > .ladi-headline {
                color: rgb(0, 37, 95);
                font-size: 25px;
                text-transform: uppercase;
                line-height: 1.6;
            }

            #BUTTON_TEXT2529 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2529 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2529 {
                width: 189.059px;
                height: 51px;
                top: 0px;
                left: 0px;
            }

            #BUTTON2529 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2529 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2531 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2531 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2531 {
                width: 189.059px;
                height: 51px;
                top: 0px;
                left: 200.874px;
            }

            #BUTTON2531 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2531 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2533 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2533 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2533 {
                width: 189.059px;
                height: 51px;
                top: 69px;
                left: 0px;
            }

            #BUTTON2533 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2533 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2535 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2535 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2535 {
                width: 189.059px;
                height: 51px;
                top: 69px;
                left: 200.874px;
            }

            #BUTTON2535 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2535 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_TEXT2537 {
                width: 189px;
                top: 11.475px;
                left: 0px;
            }

            #BUTTON_TEXT2537 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-width: 0px;
            }

            #BUTTON2537 {
                width: 189.059px;
                height: 51px;
                top: 134px;
                left: 0px;
            }

            #BUTTON2537 > .ladi-button > .ladi-button-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(159deg, #d40e6d, #f8a815);
                background: linear-gradient(159deg, #d40e6d, #f8a815);
            }

            #BUTTON2537 > .ladi-button {
                box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                -webkit-box-shadow: 0px 15px 20px -16px rgba(0, 0, 0, 0.8);
                border-radius: 5px;
            }

            #BUTTON_GROUP2528 {
                width: 389.933px;
                height: 185px;
                top: 402.217px;
                left: 16px;
            }

            #BUTTON_GROUP2528.ladi-animation > .ladi-button-group {
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.6s;
                -webkit-animation-duration: 1.6s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2539 {
                width: 418.315px;
                height: 284.448px;
                top: 294.537px;
                left: 1260.89px;
            }

            #IMAGE2539 > .ladi-image > .ladi-image-background {
                width: 505.488px;
                height: 284.448px;
                top: 0px;
                left: -51px;
                background-image: url({{asset('img/f0f2ff2cd1f71da944e6-20220221120313.jpg')}});
            }

            #IMAGE2539 > .ladi-image {
                border-radius: 4px;
            }

            #GROUP2540 {
                width: 393px;
                height: 119px;
                top: 7.098px;
                left: 51px;
            }

            #GROUP2540.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #GROUP2541 {
                width: 424px;
                height: 79px;
                top: 100.098px;
                left: -4px;
            }

            #GROUP2541.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #BOX2543 {
                width: 652px;
                height: 398.213px;
                top: 0.002px;
                left: -63px;
            }

            #BOX2543 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #HEADLINE2546 {
                width: 392px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2546 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 22px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2546 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2547 {
                width: 355px;
                top: 31px;
                left: 18.5px;
            }

            #HEADLINE2547 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP2545 {
                width: 392px;
                height: 89px;
                top: 0px;
                left: 0px;
            }

            #GROUP2545.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2548 {
                width: 228px;
                top: 83px;
                left: 82px;
            }

            #LINE2548 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE2548 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2544 {
                width: 392px;
                height: 101px;
                top: 25px;
                left: 11px;
            }

            #GROUP2544.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2550 {
                width: 422.19px;
                height: 276.723px;
                top: 0px;
                left: -2.0615px;
            }

            #IMAGE2550 > .ladi-image > .ladi-image-background {
                width: 446.35px;
                height: 276.723px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/10-20220222065720.png') }});
            }

            #IMAGE2552 {
                width: 421.517px;
                height: 273.454px;
                top: 0px;
                left: 420.129px;
            }

            #IMAGE2552 > .ladi-image > .ladi-image-background {
                width: 421.517px;
                height: 301.5px;
                top: -28.0454px;
                left: 0px;
                background-image: url({{ asset('img/4-20220222065719.png') }});
            }

            #IMAGE2553 {
                width: 416.978px;
                height: 281.304px;
                top: -4.5806px;
                left: 1262.22px;
            }

            #IMAGE2553 > .ladi-image > .ladi-image-background {
                width: 478.479px;
                height: 296.384px;
                top: -15.0802px;
                left: -23.5025px;
                background-image: url({{ asset('img/5-20220222065719.png') }});
            }

            #CAROUSEL2549 {
                width: 420px;
                height: 285px;
                top: 381.217px;
                left: 0.9665px;
            }

            #CAROUSEL2549 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #LIST_PARAGRAPH2566 {
                width: 380px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2566 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2566 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2566 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2567 {
                width: 380px;
                top: 129px;
                left: 3.14726px;
            }

            #LIST_PARAGRAPH2567 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2567 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2567 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #GROUP2565 {
                width: 383.966px;
                height: 273px;
                top: 136px;
                left: 15.0335px;
            }

            #GROUP2565.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION2542 {
                height: 666.217px;
            }

            #SECTION2542 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2542 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #BOX2580 {
                width: 652px;
                height: 614.215px;
                top: 0.002px;
                left: -63px;
            }

            #BOX2580 > .ladi-box {
                background-color: rgb(0, 37, 95);
            }

            #HEADLINE2583 {
                width: 392px;
                top: 0px;
                left: 0px;
            }

            #HEADLINE2583 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(100deg, #d40e6d, #f8a815);
                background: linear-gradient(100deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 22px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2583 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #HEADLINE2584 {
                width: 375px;
                top: 31px;
                left: 3px;
            }

            #HEADLINE2584 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 12px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.6;
            }

            #GROUP2582 {
                width: 392px;
                height: 69px;
                top: 0px;
                left: 0px;
            }

            #GROUP2582.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #LINE2585 {
                width: 228px;
                top: 66px;
                left: 82px;
            }

            #LINE2585 > .ladi-line > .ladi-line-container {
                border-top: 2px solid rgb(248, 169, 22);
                border-right: 2px solid rgb(248, 169, 22);
                border-bottom: 2px solid rgb(248, 169, 22);
                border-left: 0px !important;
            }

            #LINE2585 > .ladi-line {
                width: 100%;
                padding: 8px 0px;
            }

            #GROUP2581 {
                width: 392px;
                height: 84px;
                top: 25px;
                left: 11px;
            }

            #GROUP2581.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #IMAGE2587 {
                width: 840.466px;
                height: 491.158px;
                top: -69.581px;
                left: -1.432px;
            }

            #IMAGE2587 > .ladi-image > .ladi-image-background {
                width: 888.562px;
                height: 491.158px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/GOLF_VILLAS.png')}});
            }

            #IMAGE2589 {
                width: 845.305px;
                height: 401.032px;
                top: 0px;
                left: 839.034px;
            }

            #IMAGE2589 > .ladi-image > .ladi-image-background {
                width: 845.305px;
                height: 422.983px;
                top: -21.9511px;
                left: 0px;
                background-image: url({{asset('img/12-20220222071717.png')}});
            }

            #CAROUSEL2586 {
                width: 420px;
                height: 424px;
                top: 387.217px;
                left: 0.9665px;
            }

            #CAROUSEL2586 .ladi-carousel .ladi-carousel-arrow {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23d40e6d%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #LIST_PARAGRAPH2603 {
                width: 363px;
                top: 0px;
                left: 0px;
            }

            #LIST_PARAGRAPH2603 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2603 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2603 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #LIST_PARAGRAPH2604 {
                width: 377px;
                top: 167px;
                left: 1.5px;
            }

            #LIST_PARAGRAPH2604 > .ladi-list-paragraph {
                color: rgb(255, 255, 255);
                font-size: 15px;
                text-align: justify;
                line-height: 1.6;
            }

            #LIST_PARAGRAPH2604 ul li {
                padding-left: 39px;
            }

            #LIST_PARAGRAPH2604 ul li:before {
                content: "";
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3Asvg%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Asodipodi%3D%22http%3A%2F%2Fsodipodi.sourceforge.net%2FDTD%2Fsodipodi-0.dtd%22%20xmlns%3Ainkscape%3D%22http%3A%2F%2Fwww.inkscape.org%2Fnamespaces%2Finkscape%22%20version%3D%221.1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%20100%20100%22%20%20width%3D%22100%25%22%20height%3D%22100%25%22%20class%3D%22%22%20fill%3D%22%23d40e6d%22%3E%3Cg%20transform%3D%22translate(0%2C-952.36218)%22%3E%3Cpath%20d%3D%22m%2016%2C996.36218%200%2C12.00002%2068%2C0%200%2C-12.00002%20z%22%20style%3D%22text-indent%3A0%3Btext-transform%3Anone%3Bdirection%3Altr%3Bblock-progression%3Atb%3Bbaseline-shift%3Abaseline%3Bcolor%3A%23000000%3Benable-background%3Aaccumulate%3B%22%20fill-opacity%3D%221%22%20marker%3D%22none%22%20visibility%3D%22visible%22%20display%3D%22inline%22%20overflow%3D%22visible%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                width: 37px;
                height: 37px;
                top: -5px;
            }

            #GROUP2602 {
                width: 378.5px;
                height: 263px;
                top: 116px;
                left: 15.0335px;
            }

            #GROUP2602.ladi-animation > .ladi-group {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-delay: 0.2s;
                -webkit-animation-delay: 0.2s;
                animation-duration: 1.3s;
                -webkit-animation-duration: 1.3s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #SECTION2579 {
                height: 831.23px;
            }

            #SECTION2579 > .ladi-section-background {
                background-color: rgb(255, 255, 255);
            }

            #SECTION2579 .ladi-section-arrow-down {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
            }

            #IMAGE2616 {
                width: 420.538px;
                height: 281.304px;
                top: -4.5806px;
                left: 2101.72px;
            }

            #IMAGE2616 > .ladi-image > .ladi-image-background {
                width: 442.261px;
                height: 295.243px;
                top: -13.9388px;
                left: -21.7236px;
                background-image: url({{ asset('img/6-20220222065719.png') }});
            }

            #IMAGE2617 {
                width: 422.52px;
                height: 276.723px;
                top: 0px;
                left: 1679.2px;
            }

            #IMAGE2617 > .ladi-image > .ladi-image-background {
                width: 422.52px;
                height: 276.723px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/7-20220222065719.png')}});
            }

            #IMAGE2618 {
                width: 418.637px;
                height: 281.304px;
                top: -4.5806px;
                left: 2519.03px;
            }

            #IMAGE2618 > .ladi-image > .ladi-image-background {
                width: 418.637px;
                height: 281.304px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/8-20220222065719.png')}});
            }

            #IMAGE2619 {
                width: 423.188px;
                height: 276.723px;
                top: 0px;
                left: 839.034px;
            }

            #IMAGE2619 > .ladi-image > .ladi-image-background {
                width: 465.964px;
                height: 276.723px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/9-20220222065720.png')}});
            }

            #IMAGE2620 {
                width: 837.737px;
                height: 403.56px;
                top: -1.132px;
                left: 1685.01px;
            }

            #IMAGE2620 > .ladi-image > .ladi-image-background {
                width: 837.737px;
                height: 450.56px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/13-20220222071818.png')}});
            }

            #BUTTON2621 {
                width: 237px;
                height: 56px;
                top: auto;
                left: auto;
                bottom: 5px;
                right: 5px;
                position: fixed;
                z-index: 90000050;
                margin-right: calc((100% - 420px) / 2);
            }

            #BUTTON2621 > .ladi-button > .ladi-button-background {
                background-color: rgb(132, 5, 5);
            }

            #BUTTON2621 > .ladi-button {
                border-radius: 10px;
            }

            #BUTTON_TEXT2621 {
                width: 237px;
                top: 9px;
                left: 0px;
            }

            #BUTTON_TEXT2621 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
            }

            #IMAGE2624 {
                width: 379.748px;
                height: 379.5px;
                top: 0px;
                left: 0px;
            }

            #IMAGE2624 > .ladi-image > .ladi-overlay {
                background-color: rgb(0, 37, 95);
            }

            #IMAGE2624 > .ladi-image > .ladi-image-background {
                width: 384.748px;
                height: 429.5px;
                top: 0px;
                left: 0px;
                background-image: url({{asset('img/anh5.jpg')}});
            }

            #IMAGE2624 > .ladi-image {
                border-radius: 32px;
            }

            #BUTTON_TEXT2626 {
                width: 311px;
                top: 9.17475px;
                left: 0px;
            }

            #BUTTON_TEXT2626 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 19px;
                font-weight: bold;
                text-align: center;
                line-height: 1.6;
                -webkit-text-stroke-color: rgb(142, 12, 77);
            }

            #BUTTON2626 {
                width: 310.935px;
                height: 48.932px;
                top: 106.864px;
                left: 0px;
            }

            #BUTTON2626 > .ladi-button > .ladi-button-background {
                background-color: rgb(163, 18, 10);
            }

            #BUTTON2626 > .ladi-button {
                box-shadow: 0px 15px 20px -15px #000;
                -webkit-box-shadow: 0px 15px 20px -15px #000;
                border-radius: 5px;
            }

            #FORM_ITEM2628 {
                width: 310.935px;
                height: 40.7767px;
                top: 0px;
                left: 0px;
            }

            #FORM_ITEM2629 {
                width: 310.935px;
                height: 40.7767px;
                top: 53.0096px;
                left: 0px;
            }

            #FORM2625 {
                width: 310.935px;
                height: 155.796px;
                top: 156.074px;
                left: 34.4065px;
            }

            #FORM2625 > .ladi-form {
                color: rgb(115, 70, 70);
                font-size: 14px;
                line-height: 1.6;
            }

            #FORM2625 .ladi-form-item .ladi-form-control::placeholder, #FORM2625 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"] {
                color: rgba(115, 70, 70, 1.0);
            }

            #FORM2625 .ladi-form-item {
                padding-left: 8px;
                padding-right: 8px;
            }

            #FORM2625 .ladi-form-item.ladi-form-checkbox {
                padding-left: 13px;
                padding-right: 13px;
            }

            #FORM2625 .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(115%2C%2070%2C%2070%2C%201.0)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E");
            }

            #FORM2625 .ladi-form-item-container, #FORM2625 .ladi-form-label-container .ladi-form-label-item {
                border-style: solid;
                border-color: rgb(238, 238, 238);
                border-width: 1px;
                border-radius: 3px;
            }

            #FORM2625 .ladi-form-item-container .ladi-form-quantity button {
                background-color: rgb(238, 238, 238);
            }

            #FORM2625 .ladi-form-item-background {
                background-color: rgb(255, 255, 255);
                border-radius: 2px
            }

            #HEADLINE2630 {
                width: 378px;
                top: 21.5663px;
                left: 6.7535px;
            }

            #HEADLINE2630 > .ladi-headline {
                background: #d40e6d;
                background: -webkit-linear-gradient(111deg, #d40e6d, #f8a815);
                background: linear-gradient(111deg, #d40e6d, #f8a815);
                color: rgb(238, 202, 102);
                font-size: 22px;
                text-transform: uppercase;
                text-align: center;
                line-height: 1.4;
            }

            #HEADLINE2630 .ladi-headline {
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            #GROUP2623 {
                width: 384.753px;
                height: 379.5px;
                top: 4.5px;
                left: 6.5285px;
            }

            #GROUP2623.ladi-animation > .ladi-group {
                animation-name: fadeIn;
                -webkit-animation-name: fadeIn;
                animation-delay: 0s;
                -webkit-animation-delay: 0s;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                animation-iteration-count: 1;
                -webkit-animation-iteration-count: 1;
            }

            #POPUP2622 {
                width: 391.282px;
                height: 389px;
                top: 0px;
                left: 0px;
                bottom: 0px;
                right: 0px;
                margin: auto;
                border-radius: 28px;
            }

            #POPUP2622 > .ladi-popup > .ladi-overlay {
                border-radius: 28px;
            }

            #POPUP2622 > .ladi-popup > .ladi-popup-background {
                background: #d40e6d;
                background: -webkit-linear-gradient(54deg, #d40e6d, #f8a815);
                background: linear-gradient(54deg, #d40e6d, #f8a815);
                border-radius: 28px;
            }

            #POPUP2622 > .ladi-popup {
                box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
                -webkit-box-shadow: 0px 15px 20px -8px rgba(85, 4, 4, 0.5);
            }

            #POPUP2622.ladi-animation > .ladi-popup {
                animation-name: fadeInDown;
                -webkit-animation-name: fadeInDown;
                animation-duration: 0.5s;
                -webkit-animation-duration: 0.5s;
            }

            #IMAGE2632 {
                width: 52.6724px;
                height: 64.7109px;
                top: 75.6446px;
                left: 30.641px;
            }

            #IMAGE2632 > .ladi-image > .ladi-image-background {
                width: 52.6724px;
                height: 64.7109px;
                top: 0px;
                left: 0px;
                background-image: url({{ asset('img/123-20220222082012.png') }});
            }

            #HEADLINE2634 {
                width: 278px;
                top: 101px;
                left: 92.641px;
            }

            #HEADLINE2634 > .ladi-headline {
                color: rgb(255, 255, 255);
                font-size: 14px;
                line-height: 1.6;
            }

            #SHAPE2635 {
                width: 67px;
                height: 67px;
                top: auto;
                left: 15px;
                bottom: 15px;
                right: auto;
                position: fixed;
                z-index: 90000050;
                margin-left: calc((100% - 420px) / 2);
            }

            #SHAPE2635.ladi-animation > .ladi-shape {
                animation-name: pulse;
                -webkit-animation-name: pulse;
                animation-delay: 1s;
                -webkit-animation-delay: 1s;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                animation-iteration-count: infinite;
                -webkit-animation-iteration-count: infinite;
            }

            #SHAPE2635 svg:last-child {
                fill: rgba(22, 199, 46, 1);
            }
        }</style>
