/*
 * File: app/view/CarListings.js
 *
 * This file was generated by Sencha Architect version 3.0.4.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 4.2.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 4.2.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('CarListings.view.CarListings', {
    extend: 'Ext.panel.Panel',

    requires: [
        'CarListings.view.CarList',
        'CarListings.view.CarDetails',
        'CarListings.view.CarChart',
        'Ext.panel.Panel'
    ],

    frame: true,
    height: 609,
    width: 785,
    resizable: true,
    collapsible: true,
    title: 'Car Listing',

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'mycontainer1',
                    flex: 1
                },
                {
                    xtype: 'mypanel8',
                    flex: 1,
                    margins: '5 0 0 0 '
                },
                {
                    xtype: 'mypanel9',
                    flex: 1,
                    margins: '5 0 0 0 '
                }
            ]
        });

        me.callParent(arguments);
    }

});