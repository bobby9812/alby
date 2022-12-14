/**
 * @fileoverview dragscroll - scroll area by dragging
 * @version 0.0.8
 * 
 * @license MIT, see http://github.com/asvd/dragscroll
 * @copyright 2015 asvd <heliosframework@gmail.com> 
 */
!function(e,n){"function"==typeof define&&define.amd?define(["exports"],n):"undefined"!=typeof exports?n(exports):n(e.dragscroll={})}(this,function(e){var n,t,o=window,r=document,i=[],l=function(e,l){for(e=0;e<i.length;)(l=(l=i[e++]).container||l).removeEventListener("mousedown",l.md,0),o.removeEventListener("mouseup",l.mu,0),o.removeEventListener("mousemove",l.mm,0);for(i=[].slice.call(r.getElementsByClassName("dragscroll")),e=0;e<i.length;)!function(e,i,l,s,d,m){(m=e.container||e).addEventListener("mousedown",m.md=function(n){e.hasAttribute("nochilddrag")&&r.elementFromPoint(n.pageX,n.pageY)!=m||(s=1,i=n.clientX,l=n.clientY,n.preventDefault())},0),o.addEventListener("mouseup",m.mu=function(){s=0},0),o.addEventListener("mousemove",m.mm=function(o){s&&((d=e.scroller||e).scrollLeft-=n=-i+(i=o.clientX),d.scrollTop-=t=-l+(l=o.clientY),e==r.body&&((d=r.documentElement).scrollLeft-=n,d.scrollTop-=t))},0)}(i[e++])};"complete"==r.readyState?l():o.addEventListener("load",l,0),e.reset=l});