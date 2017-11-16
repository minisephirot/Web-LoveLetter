<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017de8e1ac6ac41d633184c27d009e6434042b9b44c26ac23b206de70f793bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017de8e1ac6ac41d633184c27d009e6434042b9b44c26ac23b206de70f793bb5->enter($__internal_017de8e1ac6ac41d633184c27d009e6434042b9b44c26ac23b206de70f793bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_884be5555661ab0160d2aeeb1d9aeae15d0ae3b7095785405b343b1628576fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884be5555661ab0160d2aeeb1d9aeae15d0ae3b7095785405b343b1628576fec->enter($__internal_884be5555661ab0160d2aeeb1d9aeae15d0ae3b7095785405b343b1628576fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_017de8e1ac6ac41d633184c27d009e6434042b9b44c26ac23b206de70f793bb5->leave($__internal_017de8e1ac6ac41d633184c27d009e6434042b9b44c26ac23b206de70f793bb5_prof);

        
        $__internal_884be5555661ab0160d2aeeb1d9aeae15d0ae3b7095785405b343b1628576fec->leave($__internal_884be5555661ab0160d2aeeb1d9aeae15d0ae3b7095785405b343b1628576fec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
